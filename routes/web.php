<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// resource untuk posts
Route::resource('posts', PostController::class)->names([
    'index' => 'posts.index',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'posts.show',
    'edit' => 'posts.edit',
    'update' => 'posts.update',
    'destroy' => 'posts.destroy'
]);

// halaman home
Route::get('/', function () {
    return view('home'); 
})->name('home');

// halaman login (posts.login)
Route::get('/login', function () {
    return view('posts.login');
})->name('posts.login');
