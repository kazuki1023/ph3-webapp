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
                'language' => 'HTML',
            ], [
                'id' => 2,
                'language' => 'CSS',
            ], [
                'id' => 3,
                'language' => 'JavaScript',
            ], [
                'id' => 4,
                'language' => 'PHP',
            ], [
                'id' => 5,
                'language' => 'Laravel',
            ], [
                'id' => 6,
                'language' => 'Ruby',
            ], [
                'id' => 7,
                'language' => 'Ruby on Rails',
            ], [
                'id' => 8,
                'language' => 'Python',
            ], [
                'id' => 9,
                'language' => 'Django',
            ], [
                'id' => 10,
                'language' => 'Java',
            ], [
                'id' => 11,
                'language' => 'Spring',
            ], [
                'id' => 12,
                'language' => 'Kotlin',
            ], [
                'id' => 13,
                'language' => 'Swift',
            ], [
                'id' => 14,
                'language' => 'Go',
            ], [
                'id' => 15,
                'language' => 'C',
            ], [
                'id' => 16,
                'language' => 'C++',
            ], [
                'id' => 17,
                'language' => 'C#',
            ], [
                'id' => 18,
                'language' => 'Scala',
            ], [
                'id' => 19,
                'language' => 'R',
            ], [
                'id' => 20,
                'language' => 'その他', 
            ]
        ]);
    }
}
