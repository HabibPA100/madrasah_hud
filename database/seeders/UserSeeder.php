<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name' => 'User',
           'email' => 'student@gmail.com',
           'phone' => '01999999999',
           'password' => bcrypt('11111111'),
           'role' => 'user',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '01999999998',
            'password' => bcrypt('11111111'),
            'role' => 'admin',
         ]);
         User::create([
            'name' => 'Parent',
            'email' => 'parent@gmail.com',
            'phone' => '01999999997',
            'password' => bcrypt('11111111'),
            'role' => 'parent',
         ]);
         User::create([
            'name' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'phone' => '01999999996',
            'password' => bcrypt('11111111'),
            'role' => 'teacher',
         ]);
    }
}
