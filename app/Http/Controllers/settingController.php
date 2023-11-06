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
        $request->validate([
            'shut_down_app' => 'required|boolean',
            'shut_down_reason' => 'required|string|max:255',
            'contact_name' => 'required|string|max:255',
            'contact_number' => 'required|string|max:255',
            'meat_set_last_time' => 'required|string|max:255',
            'meal_set_alert_time' => 'required|string|max:255',
            'alert_text_for_all' => 'required|string|max:255',
            'today_meal_coocking_end_time' => 'required|string|max:255',
        ]);
    
        $setting = new Settings();
        $data = "";
    
        if ($request->shut_down_app == 1) {
            $setting->shut_down_app = 1;
            $data = "Data 1";
        } elseif ($request->shut_down_app == 0) {
            $setting->shut_down_app = 0;
            $data = "Data 0";
        }
    
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
    

    public function view()
    {
        return view('admin.setting.view', [
            'setting' => Settings::all()
        ]);
    }

    public function edit($id)
    {
        $setting = Settings::find($id);
        return view('admin.setting.edit', compact('setting'));
    }


    public function update(Request $request, $id)
    {
        $setting = Settings::find($id);
        $setting->shut_down_app = $request->shut_down_app;
        $setting->shut_down_reason = $request->shut_down_reason;
        $setting->contact_name = $request->contact_name;
        $setting->contact_number = $request->contact_number;
        $setting->meat_set_last_time = $request->meat_set_last_time;
        $setting->meal_set_alert_time = $request->meal_set_alert_time;
        $setting->alert_text_for_all = $request->alert_text_for_all;
        $setting->today_meal_coocking_end_time = $request->today_meal_coocking_end_time;
        $setting->update();
        return redirect()->route('admin.setting.view');
    }
    public function delete($id)
    {
        Settings::where('id', $id)->delete();
        return redirect()->route('admin.setting.view');
    }


}
