<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medium;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medium::insert([
            [
                'id' => 1,
                'medium' => 'N予備校',
            ], [
                'id' => 2,
                'medium' => 'YouTube',
            ], [
                'id' => 3,
                'medium' => '書籍',
            ], [
                'id' => 4,
                'medium' => 'その他',
            ]
        ]);
    }
}
