<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\MealController;

use App\Http\Controllers\RecipeController;


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
    Route::get('/item', [itemController::class, 'showGiveItemForm'])->name('item.show');

    // アイテムをあげる処理
    Route::post('/item', [itemController::class, 'giveItem'])->name('item.give');
});


Route::get('/dashboard', [CommentController::class, 'showRandomComment'])->name('dashboard');
Route::get('/record/input', [RecodeController::class, 'input'])->name('record.input');

Route::post('/record/input', [RecodeController::class, 'uploadImages'])->name('upload.images');



Route::post('/recipes', [RecipeController::class, 'store'])->name('recipe.store');


Route::get('/index', [itemController::class, 'index'])->name('index');
Route::get('/items/give', [itemController::class, 'give'])->name('items.give');
Route::get('/', [itemController::class, 'giveItem'])->name('giveItem');

Route::post('/items/give', [ItemController::class, 'giveItem'])->name('items.give');
Route::get('/items/give', [ItemController::class, 'showGiveItemForm'])->name('items.give.form');
Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/detail', [ItemController::class, 'showItem'])->name('items.detail');

require __DIR__.'/auth.php';
