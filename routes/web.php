<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\HomeController;

Route::get('lang/{language}', function ($language) {
    Session::put('language', $language);
    return redirect()->back();
})->name('language');

Route::get('/', [HomeController::class, 'index'])
    ->middleware('translate')->name('home');

Route::get('/videos', [HomeController::class, 'videos'])
    ->middleware('translate')->name('videos');

Route::get('/marketing', [HomeController::class, 'marketing'])
    ->middleware('translate')->name('marketing');

Route::get('/manage-plans', [HomeController::class, 'manage'])
    ->middleware('translate')->name('manage');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');

Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
