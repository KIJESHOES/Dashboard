<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/kontak-kami', fn() => view('kontak-kami'))->name('kontak.kami');
Route::get('/kosmetik', fn() => view('kosmetik'))->name('kosmetik');

Route::get('/kategori/{categoryName}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.detail');

