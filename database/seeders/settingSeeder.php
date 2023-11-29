<?php

namespace Database\Seeders;

use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class settingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Settings::truncate();

        Settings::create([
            'shut_down_app' => '0',
            'shut_down_reason' => 'my work is done for today',
            'contact_name' => 'ariful islam',
            'contact_number' => '+8801745964044', // Ensure it's a string
            'meat_set_last_time' => '07:00',
            'meal_set_alert_time' => '2023-09-17 18:00:00',
            'alert_text_for_all' => '4',
            'today_meal_coocking_end_time' => '2023-09-16 14:00:00',
        ]);

    }
}
