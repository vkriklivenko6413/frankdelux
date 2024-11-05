<?php

namespace Database\Seeders;

use App\Models\Block\BlockTwo;
use Illuminate\Database\Seeder;

class BlockTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockTwo::factory()->create();
    }
}
