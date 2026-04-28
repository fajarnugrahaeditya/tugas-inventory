<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // panggil CategorySeeder
        $this->call(CategorySeeder::class);

        // Tambahkan user (opsional, boleh tetap)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Tambahkan 50 produk dummy
        \App\Models\Product::factory(50)->create();
    }
}