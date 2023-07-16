<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/halo', '/index/halo');
Route::view('/publikasi', '/index/publikasi');
Route::view('/ttgkami', '/index/tentangkami');
Route::view('/katalog', '/index/katalog');
Route::get('/index/halo', function () {
    return view('/index/halo');
})->name('beranda');

Route::get('/index/publikasi', function () {
    return view('/index/publikasi');
})->name('berita');

Route::get('/index/bacaan', function () {
    return view('/index/bacaanmateri');
})->name('bacaan');

Route::get('/index/katalog', function () {
    return view('/index/katalog');
})->name('katalog');

Route::get('/index/ttgkami', function () {
    return view('/index/tentangkami');
})->name('tentangkami');
