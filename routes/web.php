<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
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
Route::get('/news/search', [NewsController::class, 'search'])->name('news.search');

Route::get('/news/article', function () {
    return view('news.article');
});



// Educational

Route::get('/educational', [EducationalController::class, 'index'])->name('educational.index');
Route::get('/educational/create', [EducationalController::class, 'create'])->name('educational.create');
Route::post('/educational', [EducationalController::class, 'store'])->name('educational.store');
Route::get('/educational/{id}/{slug}', [EducationalController::class, 'show'])->name('educational.show');
Route::get('/educational/{id}/edit', [EducationalController::class, 'edit'])->name('educational.edit');
Route::put('/educational/{id}', [EducationalController::class, 'update'])->name('educational.update');
Route::delete('/educational/{id}', [EducationalController::class, 'destroy'])->name('educational.destroy');
Route::get('/educational/search', [EducationalController::class, 'search'])->name('educational.search');


// Profile

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


// Book

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');
