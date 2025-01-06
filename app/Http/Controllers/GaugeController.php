<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gauge;

class GaugeController extends Controller
{
    // ゲージを削除するメソッド
    public function destroy()
    {
        Gauge::truncate(); // テーブルの全データを削除

        return response()->json(['message' => 'ゲージが削除されました'], 200);
    }

}

?>