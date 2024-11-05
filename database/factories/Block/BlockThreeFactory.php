<?php

namespace Database\Factories\Block;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlockThreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],
            'description' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],
            'photo' => fake()->url
        ];
    }
}