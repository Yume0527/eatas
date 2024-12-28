<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    /**
     * 料理名を保存する
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // バリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        
        $recipe = new Recipe;
        $recipe->name = $request->input('name');
        $recipe->save();


        // レスポンス（今回は不要だが、成功のステータスを返す）
        return response()->json(['message' => '保存しました'], 201);
        
    }
}
