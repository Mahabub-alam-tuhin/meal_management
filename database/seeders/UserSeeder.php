<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('12345678'),
            'mobile' => '01874324205',
            'Whatsapp' => '01874324205',
            'Telegram' => '01874324205',
            'department' => 'IT',
            'address' => 'Mirpur,Dhaka',
            
        ]);

        User::create([
            'name' => 'sakib',
            'user_role' => 'User',
            'image' => 'adminAsset/user-image/1835849912.png',
            'email' => 'sakib@gmail.com',
            'password' => Hash::make('12345678'),
            'mobile' => '01874324201',
            'Whatsapp' => '01874324201',
            'Telegram' => '01874324201',
            'department' => 'IELTS',
            'address' => 'Mirpur,Dhaka',
        ]);

        User::create([
            'name' => 'Aakib',
            'user_role' => 'User',
            'image' => 'adminAsset/user-image/1835849912.png',
            'email' => 'Aakib@gmail.com',
            'password' => Hash::make('12345678'),
            'mobile' => '01874322546',
            'Whatsapp' => '01874322546',
            'Telegram' => '01874322546',
            'department' => 'Spoken',
            'address' => 'Mirpur,Dhaka',
        ]);

        User::create([
            'name' => 'Mahabub',
            'user_role' => 'Admin',
            'image' => 'adminAsset/user-image/1835849912.png',
            'email' => 'test@gmail.com',
            'password' => Hash::make('12345678'),
            'mobile' => '01992799003',
            'Whatsapp' => '01992799003',
            'Telegram' => '01992799003',
            'department' => 'IT',
            'address' => 'Mirpur,Dhaka',
        ]);
    }
}
