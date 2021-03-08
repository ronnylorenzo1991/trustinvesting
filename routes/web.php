<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;

Route::get('/{language}', function ($language) {
    Session::put('language',$language);
    return redirect('/');
})->name('language');

Route::get('/', function () {
    return view('welcome');
})->middleware('translate');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');

Route::get('post/{post}/show', [PostController::class, 'show'])->name('post.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
