<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function uploadImages(Request $request)
    {
        $request->validate([
            'carbohydrate' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'protein' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vegetable' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $paths = [];
        foreach (['carbohydrate', 'protein', 'vegetable'] as $field) {
            if ($request->hasFile($field)) {
                $paths[$field] = $request->file($field)->store('uploads', 'public');
            }
        }

        return back()->with('success', '画像がアップロードされました！')->with('paths', $paths);
    }
}
