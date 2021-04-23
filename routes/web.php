<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\MailController;

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

Route::get('/historico-de-pago', [HomeController::class, 'paymentHistory'])
    ->middleware('translate')->name('payments-history');

Route::get('/manage-plans', [HomeController::class, 'manage'])
    ->middleware('translate')->name('manage');

Route::get('/blog', [PostController::class, 'index'])->name('post.index');

Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/sendMail', [MailController::class, 'sendMail'])->name('sendMail');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
