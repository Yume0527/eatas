<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\GaugeController;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CookDataController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // アイテムをあげるフォーム表示
    
    // アイテムをあげる処理
});


Route::get('/dashboard', [CommentController::class, 'showRandomComment'])->name('dashboard');
Route::get('/record/input', [RecodeController::class, 'input'])->name('record.input');

Route::post('/record/input', [RecodeController::class, 'uploadImages'])->name('upload.images');
Route::post('/save-item', [ItemController::class, 'store']);
Route::delete('/reset-gauge', [GaugeController::class, 'destroy']);



Route::post('/recipes', [RecipeController::class, 'store'])->name('recipe.store');


Route::get('/items/index', [ItemController::class, 'index'])->name('index');
Route::get('/items/give', [ItemController::class, 'give'])->name('items.give');
Route::get('/', [ItemController::class, 'giveItem'])->name('giveItem');

Route::post('/items/give', [ItemController::class, 'giveItem'])->name('items.give');
Route::get('/items/give', [ItemController::class, 'showGiveItemForm'])->name('items.give.form');
Route::get('/items', [ItemController::class, 'index'])->name('items');

Route::post('/add-gauge', [GaugeController::class, 'store'])->name('gauge.store');
// これをあげるボタンを押すとゲージテーブルに1のデータを追加

Route::post('/items/collect', [ItemController::class, 'collect'])->name('items.collect');
// アイテムリスト表示
Route::get('/items', [ItemController::class, 'index'])->name('items.index')->middleware('auth');

// アイテム詳細ページ
Route::get('/items/detail', [ItemController::class, 'showItem'])->name('items.detail');

// アイテムをあげるフォーム表示
Route::get('/item', [ItemController::class, 'showGiveItemForm'])->name('item.show');

Route::get('/items/collect', [ItemController::class, 'showCollectPage'])->name('items.collect');
Route::post('/items/collect', [ItemController::class, 'collectItem'])->name('items.collect.store');

// アイテムをあげる処理


Route::post('/save-cook-data', [CookDataController::class, 'saveCookData']);
// 料理の画像が保存される処理



require __DIR__.'/auth.php';
