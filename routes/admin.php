<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\HomeController;
use \App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\TagController;
use \App\Http\Controllers\Admin\PostController;
use \App\Http\Controllers\Admin\UserController;
use \App\Http\Controllers\Admin\RoleController;
use \App\Http\Controllers\Admin\LandingController;
use \App\Http\Controllers\Admin\ImageController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

//Route::resource('landing', LandingController::class)->names('admin.landing');
Route::resource('gallery', ImageController::class)->names('admin.image');
Route::resource('category', CategoryController::class)->names('admin.category');
Route::resource('tag', TagController::class)->names('admin.tag');
Route::resource('post', PostController::class)->names('admin.post');
Route::resource('user', UserController::class)->names('admin.user');
Route::resource('role', RoleController::class)->names('admin.role');
