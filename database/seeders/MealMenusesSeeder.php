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
            'meal_date' => Carbon::createFromFormat('n-d-Y', '9-17-2023')->format('Y-m-d'),
            'description' =>'erveryone should come in time' ,
            'receipy' => 'chicken',
        
        ]);

        MealMenus::create([
            'meal_date' => Carbon::createFromFormat('n-d-Y', '9-18-2023')->format('Y-m-d'),
            'description' =>'erveryone should come in time' ,
            'receipy' => 'fish',
        
        ]);

        MealMenus::create([
            'meal_date' => Carbon::createFromFormat('n-d-Y', '9-19-2023')->format('Y-m-d'),
            'description' =>'erveryone should come in time' ,
            'receipy' => 'egg',
        
        ]);
    }
}
