<?php

namespace Database\Seeders;

use App\Models\UserPayments;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPayments::truncate();

        UserPayments::create([
            'user_id' => 1, // Replace with the correct user ID
            'month' => '2023-08-16', // Date format (e.g., May 2023)
            'payment_date' => '2023-09-16', // Date format (e.g., October 1, 2023)
            'amount' => 200,
        ]);

        UserPayments::create([
            'user_id' => 2, // Replace with the correct user ID
            'month' => '2023-08-16', // Date format (e.g., May 2023)
            'payment_date' => '2023-09-16', // Date format (e.g., October 1, 2023)
            'amount' => 300,
        ]);

        UserPayments::create([
            'user_id' => 3, // Replace with the correct user ID
            'month' => '2023-08-16', // Date format (e.g., May 2023)
            'payment_date' => '2023-09-16', // Date format (e.g., October 1, 2023)
            'amount' => 400,
        ]);
    }
}
