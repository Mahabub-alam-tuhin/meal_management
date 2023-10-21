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
            'shut_down_app' => '1',
            'shut_down_reason' => 'my work is done for today',
            'contact_name' => 'rakibul',
            'contact_number' => '01923434342', // Ensure it's a string
            'meat_set_last_time' => '14:20',
            'meal_set_alert_time' => '2023-09-17 08:00:00',
            'alert_text_for_all' => '4',
            'today_meal_coocking_end_time' => '2023-09-16 18:30:00',
        ]);
        
        // Settings::create([
        //     'shut_down_app' => '2',
        //     'shut_down_reason' => 'my work is done for today',
        //     'contact_name' => 'rakib',
        //     'contact_number' => '01923434323', // Ensure it's a string
        //     'meat_set_last_time' => '14:20',
        //     'meal_set_alert_time' => '2023-09-18 08:00:00',
        //     'alert_text_for_all' => '4',
        //     'today_meal_coocking_end_time' => '2023-10-16 18:30:00',
        // ]);
        

        // Settings::create([
        //     'shut_down_app' => '1',
        //     'shut_down_reason' => 'my work is done for today',
        //     'contact_name' => 'sofikul',
        //     'contact_number' => '01723434342', // Ensure it's a string
        //     'meat_set_last_time' => '14:20',
        //     'meal_set_alert_time' => '2023-09-19 08:00:00',
        //     'alert_text_for_all' => '4',
        //     'today_meal_coocking_end_time' => '2023-10-16 18:30:00',
        // ]);
    }
}
