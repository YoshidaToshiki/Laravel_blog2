<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(CafeController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/cafes/{cafe}', 'show')->name('show');
});

Route::controller(ReviewController::class)->middleware(['auth'])->group(function(){
    // カフェに紐づくレビューの新規登録画面へ遷移
    Route::get('/cafes/{cafe}/reviews/create', 'create')->name('create');
    // カフェに紐づくレビューの新規登録
    Route::post('/cafes/{cafe}', 'store')->name('store');
    //レビューの編集画面の表示
    Route::get('/cafes/{cafe}/{review}/edit', 'edit')->name('edit');
    //レビュー投稿編集の実行
    Route::put('/cafes/{cafe}/{review}', 'update')->name('update');
    //レビュー投稿の削除
    Route::delete('/cafes/{cafe}/{review}', 'delete')->name('delete');
});
Route::controller(AreaController::class)->middleware(['auth'])->group(function(){
    Route::get('/areas/{area}', 'region')->name('region');
});

// ひな形: Route::リクエスト方式('URI', [コントローラー名::class, 'メソッド'])
// ルートパラメータ：URIのセグメントをルートで取得したいとき、{}で囲むことでルートパラメータを定義

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
