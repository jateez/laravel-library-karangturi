<?php

use App\Http\Controllers\NewsController;
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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
});


Route::get('/edu-article', function () {
    return view('index.edu_article');
});






// Route::get('/news/posts', function () {
//     return view('news.posts');
// });



// Trix
Route::get('/trix', 'TrixController@index');
Route::post('/upload', 'TrixController@upload');
Route::post('/store', 'TrixController@store');


// News

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/news/article', function () {
    return view('news.article');
});


