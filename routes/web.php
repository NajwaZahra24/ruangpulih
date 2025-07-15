<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CurhatController;
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

// Halaman form untuk menulis curhat
Route::get('/curhat/create', function () {
    return view('curhat.create');
})->name('curhat.create');

// Proses menyimpan curhatan
Route::post('/curhat', [CurhatController::class, 'store'])->name('curhat.store');

// Halaman untuk menampilkan semua curhatan
Route::get('/curhat', [CurhatController::class, 'curhat'])->name('curhat.curhat');

