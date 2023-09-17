<?php

namespace Database\Seeders;

use App\Models\daily_expense;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DailyExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        daily_expense::truncate();

      

        daily_expense::create([
            'title' =>'chicken' ,
            'quantity' => '2',
            'unit' => 'lunch',
            'price' => '400',
            'total' => '800',
            'bajar_date' => Carbon::createFromFormat('n-d-Y', '10-16-2023')->format('Y-m-d'),
        
        ]);
        daily_expense::create([
            'title' =>'fish' ,
            'quantity' => '3',
            'unit' => 'dinner',
            'price' => '500',
            'total' => '1500',
            'bajar_date' => Carbon::createFromFormat('n-d-Y', '10-17-2023')->format('Y-m-d'),
        
        ]);
        daily_expense::create([
            'title' =>'egg' ,
            'quantity' => '15',
            'unit' => 'breakfast',
            'price' => '20',
            'total' => '300',
            'bajar_date' => Carbon::createFromFormat('n-d-Y', '10-18-2023')->format('Y-m-d'),
        
        ]);
    }
}
