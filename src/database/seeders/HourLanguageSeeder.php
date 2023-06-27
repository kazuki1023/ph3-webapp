<?php

namespace Database\Seeders;

use App\Models\HourLanguage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HourLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HourLanguage::factory()->count(100)->create();
    }
}
