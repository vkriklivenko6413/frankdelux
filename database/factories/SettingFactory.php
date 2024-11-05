<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'viber' => fake()->word,
            'whatsapp' => fake()->word,
            'phone' => fake()->phoneNumber,
            'telegram' => fake()->word,
            'email' => fake()->email,
            'address' => fake()->address,
            'instagram' => fake()->word,
        ];
    }
}
