<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    //
    public function index()
    {
        // ロジックをここに記述
        return view('evaluation'); // ビューを返す例
    }

    public function getEvaluation()
    {
        $today = now()->toDateString();

        // 今日食べた料理のカロリー合計を計算
        $totalCalories = DB::table('recipes')
            ->join('dishes', 'recipes.name', '=', 'dishes.name') // 名前で結合
            ->whereDate('recipes.created_at', $today) // 今日の日付でフィルタ
            ->sum('dishes.calories'); // カロリーを合算

        // 目標摂取カロリー
        $targetCalories = 2000;

        // 差を計算
        $calorieDifference = abs($totalCalories - $targetCalories);

        // 評価ロジック
        if ($calorieDifference <= 100) {
            $evaluation = "とても良い";
        } elseif ($calorieDifference <= 300) {
            $evaluation = "良い";
        } else {
            $evaluation = "改善が必要";
        }

        // ビューにデータを渡して表示
        return view('evaluation', [
            'totalCalories' => $totalCalories,
            'evaluation' => $evaluation,
        ]);
    }

    public function saveEvaluation(Request $request)
    {
        // リクエストから評価を取得
        $evaluation = $request->input('evaluation');

        // 評価を保存 (例: データベースの evaluations テーブルに保存)
        DB::table('evaluations')->insert([
            'evaluation' => $evaluation,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 保存後のリダイレクトやメッセージ
        return redirect()->back()->with('success', '評価が保存されました！');
    }
}
