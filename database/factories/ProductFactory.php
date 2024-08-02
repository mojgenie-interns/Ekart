<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => fake()->name(),
            // 'prize' => fake()->randomNumber(),
            // 'category_id' => fake()->numberBetween(1, 3),
            // 'status' => fake()->numberBetween(0, 1),
            // 'is_favourite' => fake()->numberBetween(0, 1),
            //
        ];
    }
}
