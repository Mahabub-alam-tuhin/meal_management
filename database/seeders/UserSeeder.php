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
        User::truncate();

        User::create([
            'name' => 'Rakib',
            'user_role' => 'User',
            'image' => 'adminAsset/user-image/1835849912.png',
            'email' => 'Rakib@gmail.com',
            'password' => '12345678',
            'mobile' => '01874324205',
            'department' => 'IT',
            'address' => 'Mirpur,Dhaka',
            
        ]);

        User::create([
            'name' => 'sakib',
            'user_role' => 'User',
            'image' => 'adminAsset/user-image/1835849912.png',
            'email' => 'sakib@gmail.com',
            'password' => '12445678',
            'mobile' => '01874324201',
            'department' => 'IELTS',
            'address' => 'Mirpur,Dhaka',
        ]);

        User::create([
            'name' => 'Aakib',
            'user_role' => 'User',
            'image' => 'adminAsset/user-image/1835849912.png',
            'email' => 'Aakib@gmail.com',
            'password' => '12345677',
            'mobile' => '01874322546',
            'department' => 'Spoken',
            'address' => 'Mirpur,Dhaka',
        ]);
    }
}
