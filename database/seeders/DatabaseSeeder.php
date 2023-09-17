<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            DepartmentSeeder::class
        ]);
        $this->call([
            UserRoleSeeder::class
        ]);

        $this->call([
            AccountlogSeeder::class
        ]);

        $this->call([
            DailyExpenseSeeder::class
        ]);

        $this->call([
            MealMenusesSeeder::class
        ]);

        $this->call([
            MonthlyMealRateSeeder::class
        ]);

        $this->call([
            UserMealSeeder::class
        ]);

        $this->call([
            UserPaymentSeeder::class
        ]);

        $this->call([
            settingSeeder::class
        ]);
        
        $this->call([
            UserRoleSeeder::class
        ]);

        $this->call([
            UserSeeder::class
        ]);
    }
}
