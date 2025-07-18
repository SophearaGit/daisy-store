<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'thea',
                    'email' => 'thea@gmail.com',
                    'password' => bcrypt('12345678'),
                    'role' => 'seller',
                ],
                [
                    'name' => 'seller',
                    'email' => 'seller@gmail.com',
                    'password' => bcrypt('12345678'),
                    'role' => 'seller',
                ],
                [
                    'name' => 'customer',
                    'email' => 'customer@gmail.com',
                    'password' => bcrypt('12345678'),
                    'role' => 'customer',
                ],
            ]
        );

    }
}
