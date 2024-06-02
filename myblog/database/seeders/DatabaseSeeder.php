<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        //Esto queda asi para mas adelnate. Los Seeders van a ser llenados manualmente mas adelante

        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);

    }
}
