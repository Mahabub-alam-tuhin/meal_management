<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function add_admin()
    {
        return view('admin.setting.add_admin');
    }
    public function store(Request $request)
    {
        $setting = new Settings();

        if ($request->shut_down_app == 1) {
            $setting->shut_down_app = 1;
            $data = "Data 1";
        } elseif ($request->shut_down_app == 0) {
            $setting->shut_down_app = 0;
            $data = "Data 0";
        }
        $setting->shut_down_app = $request->shut_down_app;
        $setting->shut_down_reason = $request->shut_down_reason;
        $setting->contact_name = $request->contact_name;
        $setting->contact_number = $request->contact_number;
        $setting->meat_set_last_time = $request->meat_set_last_time;
        $setting->meal_set_alert_time = $request->meal_set_alert_time;
        $setting->alert_text_for_all = $request->alert_text_for_all;
        $setting->today_meal_coocking_end_time = $request->today_meal_coocking_end_time;
        $setting->save();
        return back()->with('message', 'Info saved successfully')->with('data', $data);
    }
}
