<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

class itemController extends Controller
{
    public function index()
    {
        // アイテムをデータベースから取得（例: すべてのアイテム）
        $users = \App\Models\User::all();

        // アイテム一覧をビューに渡す
          return view('items.index', compact('users'));
    }
    // アイテム表示メソッド
    public function showItem()
    {
        // 例としてIDが1のアイテムを取得
       $item = Item::first(); // 例として最初のアイテムを取得
        $items = Item::all();  // 全アイテムを取得

        if (!$item) {
            return view('items.detail', ['item' => null, 'error' => 'アイテムが見つかりませんでした。']);
        }

        return view('items.detail', ['item' => $item, 'items' => $items]);
    }

    // アイテムをあげる画面表示
    public function showGiveItemForm()
{
    // 現在ログインしているユーザーのアイテムを取得
     $items = Item::where('owner_id', auth()->id())->get(); 
     $users = User::where('id', '!=', auth()->id())->get();

    // アイテムがない場合の対応
    if ($items->isEmpty()) {
        $items = [];
    }

    // item.blade.php にデータを渡して表示
    return view('item', compact('items', 'users'));
}

    // アイテムをあげる処理
    public function giveItem(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $item = Item::find($request->item_id);


        if ($item->owner_id !== auth()->id()) {
            return redirect()->back()->with('error', 'あなたの所有物ではありません。');
        }

        // アイテムを取得
        
        // アイテムの所有者を変更
        $item->owner_id = $request->user_id;
        $item->save();
        
       return redirect()->route('items')->with('success', 'アイテムをあげました！');
    }
}
