<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;


class ItemController extends Controller
{
    // アイテムを保存するメソッド
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255', // 必須の名前
        'description' => 'nullable|string', // 任意の説明
        'owner_id' => 'required|integer', // 必須の所有者ID
    ]);

    $item = new Item();
    $item->name = $request->input('name');
    $item->description = $request->input('description');
    $item->owner_id = $request->input('owner_id');
    $item->save();

    return response()->json(['message' => 'アイテムが保存されました', 'item' => $item], 201);
}

    public function index()
{
    // ユーザーが所有しているアイテムを取得
    $items = \App\Models\Item::where('owner_id', auth()->id())->get();

    return view('items.index', compact('items')); // アイテムリストをビューに渡す
}

    // アイテム表示メソッド
    public function showItem()
    {
       $items = Item::all(); // 例えばItemモデルからアイテムを取得
    return view('items.collections', compact('items')); 
    
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

        // アイテムを渡した結果、キャラクターのゲージを増やす
        $character->gauge += 10;  // ゲージを10増やす（アイテムによって増える量は変更可能）
        $character->save();

        // アイテムの所有者を変更
        $item->owner_id = $character->user_id; // キャラクターのユーザーにアイテムを渡す
        $item->save();

    // アイテムを渡した後、成功メッセージをセッションに格納
    return redirect()->route('index')->with('success', 'アイテムを渡しました！');

    return back()->with('error', '問題が発生しました。');

    }

    public function collect()
{
    // collection テーブルからランダムで1つアイテムを取得
    $randomItem = \App\Models\Collection::inRandomOrder()->first();

    // アイテムリストを取得（例：ユーザーの所有しているアイテム）
    $items = \App\Models\Item::where('user_id', auth()->id())->get();

    // items テーブルに新しいアイテムを保存
    \App\Models\Item::create([
        'user_id' => auth()->id(),
        'collection_id' => $randomItem->id,
        'name' => $randomItem->name,  // ここで collection の name を item の name に設定
    ]);

    // アイテムが追加された後、アイテムリストと成功メッセージをビューに渡す
    return redirect()->route('items.index')->with(['items' => $items, 'success' => $randomItem->name . ' を取得しました！']);
}



}
?>
