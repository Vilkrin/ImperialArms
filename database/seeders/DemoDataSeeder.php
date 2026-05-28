<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Ship;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ships = Ship::all();

        User::factory(500)
            ->create()
            ->each(function ($user) use ($ships) {

                /*
                |--------------------------------------------------------------------------
                | Blog Posts
                |--------------------------------------------------------------------------
                */

                Post::factory(rand(0, 10))->create([
                    'user_id' => $user->id,
                ]);

                /*
                |--------------------------------------------------------------------------
                | Ships
                |--------------------------------------------------------------------------
                */

                $shipCount = rand(0, 5);

                if ($shipCount > 0 && $ships->count()) {

                    $randomShips = $ships->random(
                        min($shipCount, $ships->count())
                    );

                    foreach ($randomShips as $ship) {

                        $user->ships()->attach($ship->id, [
                            'name' => fake()->words(2, true),
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            });
    }
}
