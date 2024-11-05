<?php

namespace Database\Seeders;

use App\Models\Block\BlockFour;
use Illuminate\Database\Seeder;

class BlockFourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockFour::factory()->create();
    }
}
