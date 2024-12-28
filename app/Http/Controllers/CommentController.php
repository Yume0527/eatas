<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showRandomComment()
    {
        // ランダムにコメントを1件取得
        $comment = Comment::inRandomOrder()->first();

        // コメントをビューに渡す
        return view('dashboard', compact('comment'));
    }
}
