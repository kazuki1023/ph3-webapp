<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::insert([
            [
                'id' => 1,
                'name' => 'HTML',
            ], [
                'id' => 2,
                'name' => 'CSS',
            ], [
                'id' => 3,
                'name' => 'JavaScript',
            ], [
                'id' => 4,
                'name' => 'PHP',
            ], [
                'id' => 5,
                'name' => 'Laravel',
            ], [
                'id' => 6,
                'name' => 'Ruby',
            ], [
                'id' => 7,
                'name' => 'Ruby on Rails',
            ], [
                'id' => 8,
                'name' => 'Python',
            ], [
                'id' => 9,
                'name' => 'Django',
            ], [
                'id' => 10,
                'name' => 'Java',
            ], [
                'id' => 11,
                'name' => 'Spring',
            ], [
                'id' => 12,
                'name' => 'Kotlin',
            ], [
                'id' => 13,
                'name' => 'Swift',
            ], [
                'id' => 14,
                'name' => 'Go',
            ], [
                'id' => 15,
                'name' => 'C',
            ], [
                'id' => 16,
                'name' => 'C++',
            ], [
                'id' => 17,
                'name' => 'C#',
            ], [
                'id' => 18,
                'name' => 'Scala',
            ], [
                'id' => 19,
                'name' => 'R',
            ], [
                'id' => 20,
                'name' => 'その他', 
            ]
        ]);
    }
}
