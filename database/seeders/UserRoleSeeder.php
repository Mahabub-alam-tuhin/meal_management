<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::truncate();

        UserRole::create([
            'user_id' => '1',
            'user_role' => 'Admin',
        ]);

        UserRole::create([
            'user_id' => '2',
            'user_role' => 'User',
        ]);
    }
}
