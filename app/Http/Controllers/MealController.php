<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MealController extends Controller
{
    /**
     * 今日のカロリー合計を取得する
     *
     * @return \Illuminate\View\View
     */
    public function getTodayCalories()
    {
        // 今日の日付を取得
        $today = now()->toDateString();

        // 今日食べた料理のカロリー合計を計算
        $totalCalories = DB::table('recipes')
            ->join('dishes', 'recipes.name', '=', 'dishes.name') // 名前で結合
            ->whereDate('recipes.created_at', $today)
            ->sum('dishes.calories'); // カロリーを合算

        // ビューにデータを渡して表示
        return view('record.input', ['totalCalories' => $totalCalories]);
    }
}

