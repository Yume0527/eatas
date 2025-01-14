<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cook;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        $file_path = null;
        $full_path = null;
        $user = Auth::user(); 
        // フロントエンドから送信されたデータを取得
        $cookfiles = $request->input('cookfiles'); // cookfiles は配列として送信される
        $file = $cookfiles['image'];
        $file_path = "file/" . $user->id . "/" . time() . $file->getClientOriginalName();
        $full_path = $file->storeAs("/public", $file_path);

        $full_path = storage_path('app/public/files/' . $user->id);
        chmod($full_path, 0775);

        $file_size = filesize(storage_path("app/public/" . $file_path));

        // 受け取ったデータを保存
        foreach ($cookfiles as $cookfile) {
            Cook::create([
                'name' => $cookfile['name'],  // カテゴリ名（例: 'carbohydrate-filename'）
                'image' => $file,  // 画像のパス（nullの場合もある）
            ]);
        }

        // 保存完了のレスポンスを返す
        return response()->json(['message' => 'Data saved successfully!'], 200);
    }
    /**
     * Display the cook view page.
     *
     * @return \Illuminate\View\View
     */
    public function cookView()
    {
        return view('record.cook'); // Blade テンプレートを指定
    }

    public function cookViewImg()
    {
        
        $cookData = DB::table('cook')
            ->select('name', 'image', DB::raw('DATE(created_at) as date'))
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('date'); // 日付ごとにグループ化

        return view('record.cook', ['cookData' => $cookData]);
    }


}

