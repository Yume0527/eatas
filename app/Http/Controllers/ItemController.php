<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Gauge;


class ItemController extends Controller
{
    // アイテムを保存するメソッド
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'collection_id' => 'required|integer', // 必須の整数型
        'owner_id' => 'required|integer',
    ]);

    $item = new Item();
    $item->name = $request->input('name');
    $item->collection_id = $request->input('collection_id'); // リクエストから受け取ったcollection_idを保存
    $item->owner_id = $request->input('owner_id');
    $item->save();

    return response()->json(['message' => 'アイテムが保存されました', 'item' => $item], 201);
}


    public function index()
{
    // ユーザーが所有しているアイテムを取得
    $items = \App\Models\Item::where('owner_id', auth()->id())->get();

        // gaugeテーブルのデータを取得
        $gaugeCount = Gauge::count(); // カラム数をカウント

        // 取得したカラム数に基づいて表示位置を計算
        $position = $gaugeCount; // 任意の計算ロジックを追加（例えば、位置をカウントに基づいて決める）

        return view('items.index', compact('position', 'items'));
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

   public function collect(Request $request)
{
    if ($request->isMethod('get')) {
        // GETリクエストの処理
        $collections = \App\Models\Collection::all(); // コレクションデータを取得
        $ownedItems = \App\Models\Item::where('owner_id', auth()->id())
                ->whereNotNull('collection_id')  // collection_idがNULLでないアイテムだけ取得
                ->get();
        $ownedItemIds = $ownedItems->pluck('collection_id')->toArray();
        // ランダムにコレクションアイテムを取得
        $randomItem = \App\Models\Collection::inRandomOrder()->first(); 

        if ($randomItem) {
            // ビューに渡すデータをセット
            return view('items.collect', compact('randomItem', 'collections', 'ownedItemIds'));
        } else {
            // ランダムアイテムが取得できなかった場合
            return redirect()->back()->with('error', '収集できるアイテムがありません。');
        }
    }

    if ($request->isMethod('post')) {
        // POSTリクエストの処理
        // ランダムにアイテムを取得
        $randomItem = \App\Models\Collection::inRandomOrder()->first();

        if (!$randomItem) {
            return redirect()->back()->with('error', '収集できるアイテムがありません。');
        }

        // アイテムを収集
        \App\Models\Item::create([
            'owner_id' => auth()->id(),
            'collection_id' => $randomItem->id,
            'name' => $randomItem->name,
        ]);

        // アイテムを収集した後、成功メッセージを表示してリダイレクト
        return redirect()->route('items.index')->with('success', $randomItem->name . ' を収集しました！');
    }
}

public function updateCollectionId()
{
    // descriptionが'1'の行を取得
    $items = Item::where('description', 1)->get();

    // 各アイテムのcollection_idを更新
    foreach ($items as $item) {
        $item->collection_id = $item->description; // descriptionの値をcollection_idに設定
        $item->save(); // 保存
    }

    return response()->json(['message' => 'Collection ID updated successfully']);
}






}
?>
