<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageFiles = [
            'cover_1.jpg',
            'cover_2.jpeg',
            'cover_3.png'
        ];

        return [
            'title' => fake()->sentence(2),
            'author' => fake()->name(),
            'price' => fake()->numberBetween(100,1000),
            'release' => fake()->date(),
            'cover' => fake()->randomElement($imageFiles),
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}
