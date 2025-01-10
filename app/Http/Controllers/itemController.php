<?php
namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;

class itemController extends Controller
{
    public function index()
    {
         $items = \App\Models\Item::where('owner_id', auth()->id())->get();
        // アイテムをデータベースから取得
        $users = \App\Models\User::all();

        // アイテム一覧をビューに渡す
          return view('items.index', compact('items','users'));
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
    
    // アイテムがない場合の対応
    if ($items->isEmpty()) {
        $items = [];
    }

    // 他のユーザーを取得
    $users = User::where('id', '!=', auth()->id())->get();

    // 現在ログインしているユーザーのキャラクター情報を取得
    $character = Character::where('user_id', auth()->id())->first(); 

    // キャラクターが見つからない場合
    if (!$character) {
        
        $character = new Character();
        $character->gauge = 0; // 仮の値として0を設定
    }

    // item.blade.php にデータを渡して表示
    return view('item', compact('items', 'users', 'character'));
}


    // アイテムをあげる処理
   
    // ゲージの増加ロジックを更新
public function giveItem(Request $request)
{
    // フォームから送られてきたデータを検証
    $request->validate([
        'item_id' => 'required|exists:items,id',
    ]);

    // アイテムを取得
    $item = Item::find($request->item_id);

    // 現在のユーザーがアイテムの所有者であるか確認
    if ($item->owner_id !== auth()->id()) {
        return redirect()->back()->with('error', 'あなたの所有物ではありません。');
    }

    // 現在ログインしているユーザーのキャラクターを取得
    $character = Character::where('user_id', auth()->id())->first();

    // キャラクターが見つからない場合
    if (!$character) {
        return redirect()->back()->with('error', 'キャラクターが見つかりません。');
    }

    // ゲージを増加（最大値を超えないようにする）
    $newGauge = $character->gauge + 10;
    $character->gauge = min($newGauge, $character->gauge_max);

    // キャラクターのゲージ状態を更新
    if ($character->gauge == $character->gauge_max) {
        $character->status = 'max'; // ゲージが最大値になった場合
    } else {
        $character->status = 'active'; // 通常の状態
    }

    // キャラクターのゲージ更新

    $character->save();

    // アイテムの所有者を変更
    $item->owner_id = auth()->id(); // 現在のユーザーに所有権を戻す
    $item->save();

    // アイテムを渡した後、成功メッセージをセッションに格納
    return redirect()->route('index')->with('success', 'アイテムを渡しました！');
}




}
