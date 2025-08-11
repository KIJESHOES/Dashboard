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
Route::get('/materi-fkhp-2025', fn() => view('materi-fkhp-2025'))->name('materi.fkhp');
Route::get('/obat-tradisional', fn() => view('obat-tradisional'))->name('obat.tradisional');
Route::get('/obat', fn() => view('obat'))->name('obat');

Route::get('/pangan', fn() => view('pangan'))->name('pangan');
Route::get('/suplamen-kesehatan', fn() => view('suplamen-kesehatan'))->name('suplamen.kesehatan');
// Route::get('/single', fn() => view('single'));
// Route::get('/single', fn() => view('single'));

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/obat', function () {
    $articles = Article::with('category')->latest()->paginate(6);
    return view('obat', compact('articles'));
})->name('obat.list');

Route::get('/detail/{id}', function ($id) {
    $article = Article::with('category')->findOrFail($id);
    return view('detail', compact('article'));
})->name('detail'); // Ubah dari artikel.detail jadi detail