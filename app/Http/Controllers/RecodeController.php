<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecodeController extends Controller
{
    //
    public function index()
    {
        // ロジックをここに記述
        return view('record.input'); // ビューを返す例
    }

    
}
