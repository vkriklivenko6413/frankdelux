<?php

namespace Database\Factories\Block;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlockTwoFactory extends Factory
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
            'description_1' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],
            'description_2' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],
            'description_3' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],

            'preview_title_1' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],

            'preview_title_2' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],

            'preview_title_3' => [
                'ru' => fake()->text,
                'ro' => fake()->text,
            ],
        ];
    }
}
