<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(CafeController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    //Route::get('/cafes/{cafe}', 'show')->name('show');
    //Route::put('/posts/{post}', 'update')->name('update');
    //Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::controller(ReviewController::class)->middleware(['auth'])->group(function(){
    // カフェに紐づくレビューの新規登録画面へ遷移
    Route::get('/cafes/{cafe}/reviews/create', 'create')->name('create');
    // カフェに紐づくレビューの新規登録
    Route::post('/cafes/{cafe}', 'store')->name('store');
});

// [課題]CafeControllerからMenuControllerへ処理を移す
// ひな形: Route::リクエスト方式('URI', [コントローラー名::class, 'メソッド'])
// ルートパラメータ：URIのセグメントをルートで取得したいとき、{}で囲むことでルートパラメータを定義
Route::get('/cafes/{cafe}', [MenuController::class,'show'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
