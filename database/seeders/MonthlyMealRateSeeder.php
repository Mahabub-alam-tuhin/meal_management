<?php

namespace Database\Seeders;

use App\Models\MonthlyMealRates;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonthlyMealRateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MonthlyMealRates::truncate();

       

        MonthlyMealRates::create([
            'month' => '2023-10-01', // First day of September 2023
            'meal_rate' => 50,
            'is_visible' => true, // Assuming this is a boolean field
            'month_start_date' => '2023-10-1',
            'month_end_date' => '2023-10-30',
        ]);

        MonthlyMealRates::create([
            'month' => '2023-11-01', // First day of September 2023
            'meal_rate' => 60,
            'is_visible' => true, // Assuming this is a boolean field
            'month_start_date' => '2023-11-1',
            'month_end_date' => '2023-11-30',
        ]);

        MonthlyMealRates::create([
            'month' => '2023-12-01', // First day of September 2023
            'meal_rate' => 40,
            'is_visible' => true, // Assuming this is a boolean field
            'month_start_date' => '2023-12-1',
            'month_end_date' => '2023-12-30',
        ]);

        // for ($i = 1; $i <= 1; $i++) {
        //     $mealRate = new MonthlyMealRates;
        //     $mealRate->month = '2023-09-01'; 
        //     $mealRate->meal_rate = 50.30;
        //     $mealRate->is_visible = true; 
        //     $mealRate->month_start_date = '2023-09-10';
        //     $mealRate->month_end_date = '2023-09-30';
        //     $mealRate->save();
        // }
        
        
    }
}
