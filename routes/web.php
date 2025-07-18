<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CurhatController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AudioController;

// Resource untuk posts
Route::resource('posts', PostController::class)->names([
    'index'   => 'posts.index',
    'create'  => 'posts.create',
    'store'   => 'posts.store',
    'show'    => 'posts.show',
    'edit'    => 'posts.edit',
    'update'  => 'posts.update',
    'destroy' => 'posts.destroy'
]);

// Resource untuk videos
Route::resource('videos', VideoController::class)->names([
    'index'   => 'videos.index',
    'create'  => 'videos.create',
    'store'   => 'videos.store',
    'show'    => 'videos.show',
    'edit'    => 'videos.edit',
    'update'  => 'videos.update',
    'destroy' => 'videos.destroy',
]);

// Resource untuk audios
Route::resource('audios', AudioController::class)->names([
    'index'   => 'audios.index',
    'create'  => 'audios.create',
    'store'   => 'audios.store',
    'show'    => 'audios.show',
    'edit'    => 'audios.edit',
    'update'  => 'audios.update',
    'destroy' => 'audios.destroy',
]);

// Halaman home
Route::get('/', function () {
    return view('home'); 
})->name('home');

// Halaman login
Route::get('/login', function () {
    return view('posts.login');
})->name('posts.login');

// Curhat routes
// Resource untuk audios
Route::resource('ruangcurhat', CurhatController::class)->names([
    'index'   => 'ruangcurhat',
    'store'   => 'ruangcurhat.store',]);

// ruang meditasi
Route::get('/ruangmeditasi', function () {
    return view('rmeditasi');
});

// dokter
Route::get('/dokter', function () {
    return view('dokter');
});

// about
Route::get('/about', function () {
    return view('about');
});

// edukasi
Route::get('/edukasi', function () {
    return view('edukasi');
});

// hvideo
Route::get('/hvideo', function () {
    return view('hvideo');
});