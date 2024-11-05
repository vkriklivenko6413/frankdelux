<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'menu_1' => [
               'ru' => fake()->word,
               'ro' => fake()->word,
           ],
           'menu_2' => [
               'ru' => fake()->word,
               'ro' => fake()->word,
           ],
           'menu_3' => [
               'ru' => fake()->word,
               'ro' => fake()->word,
           ],
           'menu_4' => [
               'ru' => fake()->word,
               'ro' => fake()->word,
           ],
           'menu_5' => [
               'ru' => fake()->word,
               'ro' => fake()->word,
           ],
           'menu_6' => [
               'ru' => fake()->word,
               'ro' => fake()->word,
           ],
        ];
    }
}
