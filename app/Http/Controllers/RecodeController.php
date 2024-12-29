<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class RecodeController extends Controller
{
    //
    public function input()
    {
        // ロジックをここに記述
        return view('record.input'); // ビューを返す例
    }

    public function getTodayCalories()
    {
        // 今日の日付を取得
        $today = now()->toDateString();

        // 今日食べた料理のカロリー合計を計算
        $totalCalories = DB::table('recipes')
            ->join('dishes', 'recipes.name', '=', 'dishes.name') // 名前で結合
            ->whereDate('recipes.created_at', $today)
            ->sum('dishes.calories'); // カロリーを合算

        $recipes = DB::table('recipes')
            ->whereDate('recipes.created_at', $today)->get(['name']); // 今日の料理名を取得

        // ビューにデータを渡して表示
        return view('record.input', ['totalCalories' => $totalCalories, 'recipes' => $recipes
    ]);
    }

    
}
