<?php

namespace Database\Seeders;

use App\Models\MealMenus;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealMenusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MealMenus::truncate();

      

        MealMenus::create([
            'meal_date' => Carbon::createFromFormat('n-d-Y', '10-16-2023')->format('Y-m-d'),
            'description' =>'erveryone should come in time' ,
            'receipy' => 'rice,fish,vegetable',
        
        ]);

        MealMenus::create([
            'meal_date' => Carbon::createFromFormat('n-d-Y', '10-17-2023')->format('Y-m-d'),
            'description' =>'erveryone should come in time' ,
            'receipy' => 'rice,fish,chicken',
        
        ]);

        MealMenus::create([
            'meal_date' => Carbon::createFromFormat('n-d-Y', '10-18-2023')->format('Y-m-d'),
            'description' =>'erveryone should come in time' ,
            'receipy' => 'rice,fish,dal',
        
        ]);
    }
}
