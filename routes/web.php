<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ItemController;

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
Route::get('/dashboard', [CommentController::class, 'showRandomComment'])->name('dashboard');
Route::get('/record/input', [ProfileController::class, 'input'])->name('record.input');
// コントローラの部分は後で変更
Route::get('/evaluation', [ProfileController::class, 'evaluation'])->name('evaluation');
// コントローラの部分は後で変更
Route::get('/', [ItemController::class, 'index'])->name('home');
Route::get('/item', [ItemController::class, 'showItem'])->name('item.show');

require __DIR__.'/auth.php';