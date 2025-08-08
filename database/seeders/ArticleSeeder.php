<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // Obat
        Article::create([
            'title' => 'Obat Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Obat Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-1',
            'category' => 'Obat',
        ]);
        Article::create([
            'title' => 'Obat Article 2',
            'content' => 'Ini adalah konten dari artikel ke-2 untuk kategori Obat.',
            'author' => 'Penulis 2',
            'slug' => Str::slug('Obat Article 2') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-2',
            'category' => 'Obat',
        ]);
        Article::create([
            'title' => 'Obat Article 3',
            'content' => 'Ini adalah konten dari artikel ke-3 untuk kategori Obat.',
            'author' => 'Penulis 3',
            'slug' => Str::slug('Obat Article 3') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-3',
            'category' => 'Obat',
        ]);
        Article::create([
            'title' => 'Obat Article 4',
            'content' => 'Ini adalah konten dari artikel ke-4 untuk kategori Obat.',
            'author' => 'Penulis 4',
            'slug' => Str::slug('Obat Article 4') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-4',
            'category' => 'Obat',
        ]);
        Article::create([
            'title' => 'Obat Article 5',
            'content' => 'Ini adalah konten dari artikel ke-5 untuk kategori Obat.',
            'author' => 'Penulis 5',
            'slug' => Str::slug('Obat Article 5') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Obat/article-5',
            'category' => 'Obat',
        ]);

        // Pangan
        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);


        // Kosmetik
        Article::create([
            'title' => 'Kosmetik',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Kosmetik',
        ]);

        Article::create([
            'title' => 'Kosmetik',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Kosmetik',
        ]);

        Article::create([
            'title' => 'Kosmetik',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Kosmetik',
        ]);

        Article::create([
            'title' => 'Kosmetik',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Kosmetik',
        ]);

        Article::create([
            'title' => 'Kosmetik',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Kosmetik',
        ]);
        // Lanjutkan seperti ini...
        // Obat Tradisional

        Article::create([
            'title' => 'Obat Tradisional',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Obat Tradisional',
        ]);

        Article::create([
            'title' => 'Obat Tradisional',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Obat Tradisional',
        ]);

        Article::create([
            'title' => 'Obat Tradisional',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Obat Tradisional',
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);

        Article::create([
            'title' => 'Pangan Article 1',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Pangan',
        ]);

        // Suplemen Kesehatan
        Article::create([
            'title' => 'Suplemen Kesehatan',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Suplemen Kesehatan',
        ]);

        Article::create([
            'title' => 'Suplemen Kesehatan',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Suplemen Kesehatan',
        ]);

        Article::create([
            'title' => 'Suplemen Kesehatan',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Suplemen Kesehatan',
        ]);

        Article::create([
            'title' => 'Suplemen Kesehatan',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Suplemen Kesehatan',
        ]);

        Article::create([
            'title' => 'Suplemen Kesehatan',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Suplemen Kesehatan',
        ]);

        // Materi FKP
        Article::create([
            'title' => 'Materi FKP',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Materi FKP',
        ]);

        Article::create([
            'title' => 'Materi FKP',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Materi FKP',
        ]);

        Article::create([
            'title' => 'Materi FKP',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Materi FKP',
        ]);

        Article::create([
            'title' => 'Materi FKP',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Materi FKP',
        ]);

        Article::create([
            'title' => 'Materi FKP',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Pangan.',
            'author' => 'Penulis 1',
            'slug' => Str::slug('Pangan Article 1') . '-' . Str::random(5),
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://example.com/Pangan/article-1',
            'category' => 'Materi FKP',
        ]);
    }
}
