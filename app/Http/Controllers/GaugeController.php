<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gauge;
use App\Models\Item;

class GaugeController extends Controller
{
    public function store(Request $request)
    {
        // データを保存する
        Gauge::create([
            'count' => 1,
            'created_at' => null,
            'updated_at' => null,
        ]);
        Item::query()->update(['description' => 2]);

        // index.blade.php にリダイレクト
        return redirect()->route('index');
    }
    
    // ゲージを削除するメソッド
    public function destroy()
    {
        Gauge::truncate(); // テーブルの全データを削除

        return response()->json(['message' => 'ゲージが削除されました'], 200);
    }

}

?>