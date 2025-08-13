<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $adminUser = \App\Models\User::first();

        Article::create([
            'title' => 'Materi Obat Aman',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/19O7TAwl0asFpPLspSbuYSdkDZ3NmX-YS/view?usp=drive_link',
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Konsumen Cerdas, Kenali Obat dan Penyalahgunaannya',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://docs.google.com/presentation/d/1lYa7nRMDbLxNuLKunv4iY2x3guCuuudq/edit?usp=drive_link&ouid=104727794965237713820&rtpof=true&sd=true',
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Madol dan Sejenisnya',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://docs.google.com/presentation/d/1k15XQe2POCQKvJ95ZIV_jYDikfrZKCbq/edit?usp=drive_link&ouid=104727794965237713820&rtpof=true&sd=true',
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Lindungi Diri dan Keluarga dengan Cerdas Memilih Obat',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://docs.google.com/presentation/d/17-Ewr1yPfKr-l_X8g51ydsWWFbLdKTuO/edit?usp=drive_link&ouid=104727794965237713820&rtpof=true&sd=true',
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'KIE tentang Sadar Obat Aman NEW',
            'content' => 'Ini adalah konten dari artikel ke-1 untuk kategori Obat.',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://docs.google.com/presentation/d/1etjMhJyZDcU1BHEOBzDKEl3N8MIbWRad/edit?usp=drive_link&ouid=104727794965237713820&rtpof=true&sd=true',
            'category_id' => 1,
            'user_id' => $adminUser->id,
        ]);
    }
}
