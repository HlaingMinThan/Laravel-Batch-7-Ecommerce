<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->word(),
            "category_id" => Category::factory(),
            "image" => fake()->imageUrl(),
            "price" => fake()->numberBetween(100, 100),
            "slug" => fake()->slug(),
            "discount_percentage" => fake()->numberBetween(0, 100),
        ];
    }
}
