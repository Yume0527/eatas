<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gauge;

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