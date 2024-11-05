<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Block\BlockOne;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@test.com',
//             'password' => Hash::make('test@test.com')
//         ]);

        $this->call([
            BlockOneSeeder::class,
            BlockTwoSeeder::class,
            BlockThreeSeeder::class,
            BlockFourSeeder::class,
            MenuSeeder::class,
            SettingSeeder::class
        ]);
    }
}
