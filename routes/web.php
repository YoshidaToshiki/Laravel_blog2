<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CafeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(CafeController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    //Route::get('/posts/create', 'create')->name('create');
    Route::get('/cafes/{cafe}', 'show')->name('show');
    //Route::put('/posts/{post}', 'update')->name('update');
    //Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::get('/menus/{menu}', [CafeController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
