<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seeder kategori
        $this->call(CategorySeeder::class);

        // Seeder user login
        $this->call(UserSeeder::class);

        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        
        \App\Models\Product::factory(50)->create();
    }
}