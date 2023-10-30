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
            'user_id' => '1',
            'quantity' =>'2' ,
            'date' => '2023-09-17',
            'meal_rate_id' => 1
        ]);
        UserMeals::create([
            'user_id' => '1',
            'quantity' =>'3' ,
            'date' => '2023-10-17',
            'meal_rate_id' => 2
        ]);
        UserMeals::create([
            'user_id' => '1',
            'quantity' =>'4' ,
            'date' => '2023-11-17',
            'meal_rate_id' => 3
        ]);

        UserMeals::create([
            'user_id' => '2',
            'quantity' =>'1' ,
            'date' => '2023-09-18',
            'meal_rate_id' => 1
        ]);
        UserMeals::create([
            'user_id' => '3',
            'quantity' =>'1' ,
            'date' => '2023-09-19',
            'meal_rate_id' => 1
        ]);
    }
}
