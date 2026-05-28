<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(4);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . fake()->unique()->numberBetween(1000, 999999),
            'body' => fake()->paragraphs(5, true),
            'status' => fake()->randomElement(['draft', 'published']),
            'is_published' => fake()->boolean(),
            'published_at' => fake()->optional()->dateTimeBetween('-1 year', 'now'),
            'seo_title' => $title,
            'seo_description' => fake()->sentence(12),
        ];
    }
}
