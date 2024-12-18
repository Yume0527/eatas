<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
   public function index()
    {
        return view('Home');
    }

    public function showItem()
    {
        $item = [
            'name' => 'チョコレート',
            'image' => 'images/chocolate.png',
            'message' => '今日(?)の評価が◯◯だったのでチョコレートをゲットしました！'
        ];

        return view('item', ['item' => $item]);
    }
    

}
