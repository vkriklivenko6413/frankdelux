<?php

namespace Database\Seeders;

use App\Models\Block\BlockOne;
use Illuminate\Database\Seeder;

class BlockOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlockOne::factory()->create();
    }
}
