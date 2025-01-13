<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cook;

class CookDataController extends Controller
{
    /**
     * 料理データを保存する
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function saveCookData(Request $request)
    {
        // フロントエンドから送信されたデータを取得
        $cookfiles = $request->input('cookfiles'); // cookfiles は配列として送信される

        // 受け取ったデータを保存
        foreach ($cookfiles as $cookfile) {
            Cook::create([
                'name' => $cookfile['name'],  // カテゴリ名（例: 'carbohydrate-filename'）
                'image' => $cookfile['image'],  // 画像のパス（nullの場合もある）
            ]);
        }

        // 保存完了のレスポンスを返す
        return response()->json(['message' => 'Data saved successfully!'], 200);
    }
}

