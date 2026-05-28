<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Menu::firstOrCreate(
            ['location' => 'main_navbar'],
            [
                'name' => 'Main Navbar',
                'slug' => 'main-navbar',
                'is_active' => true,
            ]
        );

        Menu::firstOrCreate(
            ['location' => 'footer'],
            [
                'name' => 'Footer',
                'slug' => 'footer',
                'is_active' => true,
            ]
        );
    }
}
