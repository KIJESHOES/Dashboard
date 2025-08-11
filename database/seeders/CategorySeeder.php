<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Obat',
            'Pangan',
            'Kosmetik',
            'Obat Tradisional',
            'Suplemen Kesehatan',
            'Materi FKP'
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}


