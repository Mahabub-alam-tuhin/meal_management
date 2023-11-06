<?php

namespace App\Http\Controllers;

use App\Models\UserMeals;
use Illuminate\Http\Request;

class mealRegistercontroller extends Controller
{
    public function Add_user_meal()
    {
        return view('admin.meal_register.Add_user_meal');
    }
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'user_id' => 'required|array',
            'user_id.*' => 'exists:users,id', // Check if user_id exists in the 'users' table
        ]);
    
        $date = $request->input('date');
        $selectedUsers = $request->input('user_id');
    
        if (!empty($selectedUsers) && is_array($selectedUsers)) {
            foreach ($selectedUsers as $user_id) {
                UserMeals::create([
                    'date' => $date,
                    'user_id' => $user_id,
                ]);
            }
        }
    
        return back()->with('message', 'Meals have been saved successfully');
    }
    

    public function all_user_meal()
    {
        return view('admin.meal_register.all_user_meal', [
            'users' => UserMeals::with('user')->get()
        ]);
    }

    public function delete($id)
    {
        UserMeals::where('id', $id)->delete();
        return redirect()->route('admin.meal_register.all_user_meal');
    }
}
