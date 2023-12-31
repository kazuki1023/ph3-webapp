<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(HoursTableSeeder::class);
        $this->call(HourMediumSeeder::class);
        $this->call(HourLanguageSeeder::class);
    }
}
