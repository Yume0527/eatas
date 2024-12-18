<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Home');
})->middleware(['auth', 'verified'])->name('Home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/record/input', [ProfileController::class, 'input'])->name('record.input');
// コントローラの部分は後で変更
Route::get('/evaluation', [ProfileController::class, 'evaluation'])->name('evaluation');
// コントローラの部分は後で変更
Route::get('/', [ItemController::class, 'index'])->name('home');
Route::get('/item', [ItemController::class, 'showItem'])->name('item.show');

require __DIR__.'/auth.php';
