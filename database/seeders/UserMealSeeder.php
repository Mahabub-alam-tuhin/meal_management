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
            'name' => 'Rakib',
            'quantity' =>'2' ,
            'date' => '2023-09-17',
            
        ]);
        UserMeals::create([
            'name' => 'Sakib',
            'quantity' =>'1' ,
            'date' => '2023-09-18',
            
        ]);
        UserMeals::create([
            'name' => 'tusar',
            'quantity' =>'1' ,
            'date' => '2023-09-19',
            
        ]);
    }
}
