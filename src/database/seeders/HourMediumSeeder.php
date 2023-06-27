<?php

namespace Database\Seeders;

use App\Models\Hour;
use App\Models\HourMedium;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HourMediumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HourMedium::factory()->count(50)->create();
    }
}
