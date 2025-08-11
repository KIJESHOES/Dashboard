<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = \App\Models\User::first(); // atau ambil user yang memang sudah ada

        Article::create([
            'title' => 'Obat Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-1',
            'category_id' => 1,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);
    }
}
