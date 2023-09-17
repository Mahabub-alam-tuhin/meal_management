<?php

namespace Database\Seeders;

use App\Models\UserMeals;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserMealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserMeals::truncate();

        UserMeals::create([
            'users_id' => '1',
            'quantity' =>'2' ,
            'date' => '2023-09-17',
            
        ]);
        UserMeals::create([
            'users_id' => '2',
            'quantity' =>'1' ,
            'date' => '2023-09-18',
            
        ]);
        UserMeals::create([
            'users_id' => '3',
            'quantity' =>'1' ,
            'date' => '2023-09-19',
            
        ]);
    }
}
