<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecodeController;
use Illuminate\Support\Facades\Route;


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
});



Route::get('/record/input', [RecodeController::class, 'input'])->name('record.input');
// コントローラの部分は後で変更
Route::get('/dashboard', [CommentController::class, 'showRandomComment'])->name('dashboard');
Route::get('/record/input', [ProfileController::class, 'input'])->name('record.input');


Route::get('/evaluation', [ProfileController::class, 'evaluation'])->name('evaluation');
// コントローラの部分は後で変更
// ここで'/home'のルートを1つに統一
Route::get('/home', [itemController::class, 'index'])->name('home');

Route::post('/items/give', [ItemController::class, 'giveItem'])->name('items.give');
Route::get('/items/give', [ItemController::class, 'showGiveItemForm'])->name('items.give.form');
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/detail', [ItemController::class, 'showItem'])->name('items.detail');






Route::post('/recipes', [RecipeController::class, 'store'])->name('recipe.store');


require __DIR__.'/auth.php';
