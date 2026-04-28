<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // tambah ini

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Elektronik', 'Fashion', 'Makanan', 'Alat Tulis'];

        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }
    }
}