<?php

namespace Database\Seeders;

use App\Models\AccountLogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AccountlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountLogs::truncate();

        AccountLogs::create([
            'amount' => 800,
            'is_expense' => 1,
            'is_income' => 0, // Change to a valid integer value
            'income_date' => Carbon::createFromFormat('n-d-Y', '10-16-2023')->format('Y-m-d'),
            // 'category' => '',
        ]);

        AccountLogs::create([
            'amount' => 1500,
            'is_expense' => 1,
            'is_income' => 0, // Change to a valid integer value
            'income_date' => Carbon::createFromFormat('n-d-Y', '10-17-2023')->format('Y-m-d'),
            // 'category' => '',
        ]);

        AccountLogs::create([
            'amount' => 300,
            'is_expense' => 1,
            'is_income' => 0, // Change to a valid integer value
            'income_date' => Carbon::createFromFormat('n-d-Y', '10-18-2023')->format('Y-m-d'),
            // 'category' => '',
        ]);
        
        AccountLogs::create([
            'amount' => 200,
            'is_expense' => 0,
            'is_income' => 1, // Change to a valid integer value
            'income_date' => Carbon::createFromFormat('n-d-Y', '11-01-2023')->format('Y-m-d'),
            // 'category' => '',
        ]);

        AccountLogs::create([
            'amount' => 300,
            'is_expense' => 0,
            'is_income' => 1, // Change to a valid integer value
            'income_date' => Carbon::createFromFormat('n-d-Y', '11-01-2023')->format('Y-m-d'),
            // 'category' => '',
        ]);

        AccountLogs::create([
            'amount' => 400,
            'is_expense' => 0,
            'is_income' => 1, // Change to a valid integer value
            'income_date' => Carbon::createFromFormat('n-d-Y', '11-01-2023')->format('Y-m-d'),
            // 'category' => '',
        ]);
    }
}
