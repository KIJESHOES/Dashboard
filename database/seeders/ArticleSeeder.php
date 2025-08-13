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
            'content' => 'Materi ini berisi panduan dan informasi edukatif dari BPOM Bogor mengenai penggunaan obat yang benar, aman, dan efektif. Di dalamnya terdapat penjelasan mengenai cara memilih obat yang tepat, aturan membaca label obat, dosis penggunaan, penyimpanan yang benar, serta bahaya penggunaan obat tanpa resep atau secara berlebihan. Materi ini bertujuan meningkatkan kesadaran masyarakat agar lebih bijak dalam menggunakan obat, demi menjaga kesehatan dan mencegah risiko efek samping yang tidak diinginkan.',
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

        Article::create([
            'title' => 'Pedoman Mitigasi Risiko Penggunaan Bahan Penolong Nitrogen Cair Pada Pangan Olahan',
            'content' => 'Ini adalah konten dari artikel untuk kategori Pangan',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/1dGDuY4w5CzrSd0cLEoCK-XPYLQ8UwR1t/view?usp=drive_link',
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Buku Inovasi Pangan Mei 2023',
            'content' => 'Ini adalah konten dari artikel untuk kategori Pangan',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/1zsteFt78E1cMNV_cKXwOEGn1gwy1LGXJ/view?usp=drive_link',
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Buku Inovasi Pangan September 2024',
            'content' => 'Ini adalah konten dari artikel untuk kategori Pangan',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/10LC27UGxsA8xDplxVt_Jo1vvrq3vaKeZ/view?usp=drive_link',
            'category_id' => 2,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Regulasi Tata Cara Notifikasi Kosmetik update Maret 2025',
            'content' => 'Ini adalah konten dari artikel untuk kategori Kosmetik',
            'author' => 'BPOM Bogor',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/1jr8-vo1OUJWsqHElX6HdZgTQ8wNKhox1/view?usp=drive_link',
            'category_id' => 3,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Teknologi Formulasi Obat Bahan Alam.',
            'content' => 'Ini adalah konten dari artikel untuk kategori Kosmetik',
            'author' => 'Dr.rer.nat. Yosi Bayu Murti, MSi, Apt',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/12Zgweo_1vMxTooaqL_NTmv6rG5ZvB-jZ/view?usp=drive_link',
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Kegiatan Bisa UMKM OBA',
            'content' => 'Ini adalah konten dari artikel untuk kategori Kosmetik',
            'author' => 'Direktur PMPU OTSKK',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/14kr9f58eE7diyPIXs7SsPSe-czpmGQUZ/view?usp=drive_link',
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Rasionalisasi Komposisi Obat Bahan Alami',
            'content' => 'Ini adalah konten dari artikel untuk kategori Kosmetik',
            'author' => 'Dr. Apt. Kintoko, M.Sc',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/1a_4wYVGHiGV2Ypyn1hwnP8Qp9fnKSvFL/view?usp=drive_link',
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Regulai Ketentuan Formulasi Obat Bahan Alam Bisa UMKM',
            'content' => 'Ini adalah konten dari artikel untuk kategori Kosmetik',
            'author' => 'Dra. Kristiana Haryati, Apt., M.K.M',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/1a_4wYVGHiGV2Ypyn1hwnP8Qp9fnKSvFL/view?usp=drive_link',
            'category_id' => 4,
            'user_id' => $adminUser->id,
        ]);

        Article::create([
            'title' => 'Anti Korupsi',
            'content' => 'Ini adalah konten dari artikel untuk kategori Materi FKP',
            'author' => 'BPOM BOGOR',
            'published_at' => now()->subDays(rand(1, 30)),
            'link' => 'https://drive.google.com/file/d/1mbPf_KaCMOGOAFCeE4kQ0XDlIzqSnnkE/view?usp=drive_link',
            'category_id' => 6,
            'user_id' => $adminUser->id,
        ]);
    }
}
