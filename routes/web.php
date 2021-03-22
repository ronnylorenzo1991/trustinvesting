<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

Route::get('lang/{language}', function ($language) {
    Session::put('language', $language);
    return redirect('/');
})->name('language');

Route::get('/', function () {
    return view('welcome');
})->middleware('translate')->name('home');

Route::get('/marketing', function () {
    return view('marketing');
})->middleware('translate')->name('marketing');

Route::get('/manage-plans', function () {
    return view('manage-plans');
})->middleware('translate')->name('manage');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');

Route::get('post/{post}/show', [PostController::class, 'show'])->name('post.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
