<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/kontak-kami', fn() => view('kontak-kami'));
Route::get('/kosmetik', fn() => view('kosmetik'));
Route::get('/materi-fkhp-2025', fn() => view('materi-fkhp-2025'));
Route::get('/obat-tradisional', fn() => view('obat-tradisional'));
// Route::get('/obat', fn() => view('obat'));

Route::get('/pangan', fn() => view('pangan'));
Route::get('/suplamen-kesehatan', fn() => view('suplamen-kesehatan'));
Route::get('/single', fn() => view('single'));
Route::get('/single', fn() => view('single'));

Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/obat', function () {
    $articles = Article::with('category')->latest()->paginate(6);
    return view('obat', compact('articles'));
});


Route::get('/detail/{id}', function ($id) {
    $article = Article::with('category')->findOrFail($id);
    return view('detail', compact('article'));
})->name('artikel.detail');

