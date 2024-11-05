<?php

namespace Database\Seeders;

use App\Models\Block\BlockThree;
use Illuminate\Database\Seeder;

class BlockThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockThree::factory()->create();
    }
}
