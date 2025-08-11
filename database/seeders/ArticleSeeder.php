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

        Article::create([
            'title' => 'Obat Article 2',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-1',
            'category_id' => 1,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Article 3',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-1',
            'category_id' => 1,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Article 4',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-1',
            'category_id' => 1,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Article 5',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-1',
            'category_id' => 1,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        // Tambahkan artikel untuk kategori Pangan

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category_id' => 2,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category_id' => 2,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category_id' => 2,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category_id' => 2,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category_id' => 2,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category_id' => 2,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        // tambahkan artikel untuk kategori Kosmetik
        Article::create([
            'title' => 'Kosemetik Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Kosmetik.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Kosmetik Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Kosmetik/article-1',
            'category_id' => 3,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Kosemetik Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Kosmetik.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Kosmetik Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Kosmetik/article-1',
            'category_id' => 3,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Kosemetik Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Kosmetik.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Kosmetik Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Kosmetik/article-1',
            'category_id' => 3,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Kosemetik Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Kosmetik.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Kosmetik Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Kosmetik/article-1',
            'category_id' => 3,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Kosemetik Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Kosmetik.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Kosmetik Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Kosmetik/article-1',
            'category_id' => 3,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        // tambahkan artikel untuk kategori Obat Tradisional
        Article::create([
            'title' => 'Obat Tradisonal Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat Tradisonal.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Tradisonal Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat Tradisional/article-1',
            'category_id' => 4,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Tradisonal Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat Tradisonal.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Tradisonal Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat Tradisional/article-1',
            'category_id' => 4,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Tradisonal Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat Tradisonal.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Tradisonal Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat Tradisional/article-1',
            'category_id' => 4,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Tradisonal Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat Tradisonal.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Tradisonal Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat Tradisional/article-1',
            'category_id' => 4,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Obat Tradisonal Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat Tradisonal.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Tradisonal Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat Tradisional/article-1',
            'category_id' => 4,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        // tambahkan artikel untuk kategori Suplemen Kesehatan

        Article::create([
            'title' => 'Supement Kesehatan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Supement Kesehatan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Supement Kesehatan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/SupementKesehatan/article-1',
            'category_id' => 5,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Supement Kesehatan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Supement Kesehatan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Supement Kesehatan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/SupementKesehatan/article-1',
            'category_id' => 5,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Supement Kesehatan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Supement Kesehatan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Supement Kesehatan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/SupementKesehatan/article-1',
            'category_id' => 5,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Supement Kesehatan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Supement Kesehatan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Supement Kesehatan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/SupementKesehatan/article-1',
            'category_id' => 5,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Supement Kesehatan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Supement Kesehatan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Supement Kesehatan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/SupementKesehatan/article-1',
            'category_id' => 5,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        // tambahkan artikel untuk kategori Materi FKP
        Article::create([
            'title' => 'Materi FKP Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Materi FKP.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Materi FKP Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/MateriFKP/article-1',
            'category_id' => 6,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Materi FKP Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Materi FKP.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Materi FKP Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/MateriFKP/article-1',
            'category_id' => 6,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Materi FKP Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Materi FKP.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Materi FKP Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/MateriFKP/article-1',
            'category_id' => 6,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Materi FKP Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Materi FKP.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Materi FKP Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/MateriFKP/article-1',
            'category_id' => 6,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);

        Article::create([
            'title' => 'Materi FKP Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Materi FKP.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Materi FKP Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/MateriFKP/article-1',
            'category_id' => 6,
            'user_id' => $adminUser->id, // <== ini wajib ada supaya gak error
        ]);
    }
}
