<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'name' => '管理者',
            'email' => 'admin@example.cpm',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'is_admin' => false,
        ]);
    }
}
