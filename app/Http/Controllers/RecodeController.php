<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecodeController extends Controller
{
    //
    public function input()
    {
        
          return view('record.input');
    }

    public function uploadImages(Request $request)
    {
        $request->validate([
            'carbohydrate' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'protein' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vegetable' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $paths = [];
        foreach (['carbohydrate', 'protein', 'vegetable'] as $field) {
            if ($request->hasFile($field)) {
                $paths[$field] = $request->file($field)->store('uploads', 'public');
            }
        }

        // アップロードされた画像パスをセッションに保存
        session(['uploaded_images' => $paths]);

        return back()->with('success', '画像がアップロードされました！');
    }


}
