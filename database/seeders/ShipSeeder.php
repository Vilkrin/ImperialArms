<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ship;

class ShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ships = [

            [
                'manufacturer' => 'Drake',
                'model' => 'Corsair',
                'class' => 'Exploration',
                'role' => 'Multi-Crew',
                'size' => 'Large',
                'crew_required' => 4,
                'cargo_capacity' => 72,
                'description' => fake()->paragraph(),
            ],

            [
                'manufacturer' => 'RSI',
                'model' => 'Constellation Andromeda',
                'class' => 'Gunship',
                'role' => 'Multi-Purpose',
                'size' => 'Large',
                'crew_required' => 4,
                'cargo_capacity' => 96,
                'description' => fake()->paragraph(),
            ],

            [
                'manufacturer' => 'Anvil',
                'model' => 'Carrack',
                'class' => 'Exploration',
                'role' => 'Expedition',
                'size' => 'Capital',
                'crew_required' => 6,
                'cargo_capacity' => 456,
                'description' => fake()->paragraph(),
            ],

            [
                'manufacturer' => 'Aegis',
                'model' => 'Gladius',
                'class' => 'Fighter',
                'role' => 'Combat',
                'size' => 'Small',
                'crew_required' => 1,
                'cargo_capacity' => 0,
                'description' => fake()->paragraph(),
            ],

            [
                'manufacturer' => 'Crusader',
                'model' => 'C2 Hercules',
                'class' => 'Transport',
                'role' => 'Cargo',
                'size' => 'Large',
                'crew_required' => 2,
                'cargo_capacity' => 696,
                'description' => fake()->paragraph(),
            ],

        ];

        foreach ($ships as $ship) {
            Ship::create($ship);
        }
    }
}
