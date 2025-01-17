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
        $user = Auth::user(); 
        $cookfiles = $request->input('cookfiles'); // cookfiles は配列として送信される

        foreach ($cookfiles as $cookfile) {
            // 画像データが存在する場合のみ処理
            if (isset($cookfile['image']) && $cookfile['image'] !== null) {
                // 画像データを処理
                $file = $request->file('cookfiles.' . array_search($cookfile, $cookfiles) . '.image'); // ファイルをリクエストから取得
                $full_path = $request->input('name');
                // $full_path = $file->storeAs("public", $file_path);

                // 画像ファイルのフルパス
                // $storage_path = storage_path('app/public/' . $file_path);

                // ファイルパーミッションを設定
                // chmod($storage_path, 0775);

                // 画像サイズを取得
                // $file_size = filesize($storage_path);
            } else {
                $full_path = null; // 画像がない場合は null を設定
            }

            // データを保存
            Cook::create([
                'name' => $cookfile['name'], // カテゴリ名
                'image' => $full_path,      // 画像のパス（または null）
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

