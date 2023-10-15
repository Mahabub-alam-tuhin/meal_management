<?php

namespace App\Http\Controllers;
use App\Models\UserMeals;
use Illuminate\Http\Request;
use Carbon\Carbon;

class frontEndBookingController extends Controller
{
    public function add_user_Meal_Booking(){
        return view('frontEnd.Booking.add_user_Meal_Booking');
    }
    public function store(Request $request)
    {
        // $storeMeal = new UserMeals();
        $currentTime = Carbon::now();
        $meat_set_last_time = Carbon::today()->setHour(18)->setMinute(0)->setSecond(0);

        if ($currentTime->lte($meat_set_last_time)) {
            $meals = new UserMeals();
            $meals->user_id = $request->user_id;
            $meals->quantity = $request->quantity;
            $meals->date = $request->date;
            $meals->save();
            return redirect()->back();
        } else {
            return view ('please contact with admin');
        }

    }
    public function show()
    {  
        // dd(auth()->user());
        $id = auth()->user()->id; 
        $meals = UserMeals::where('user_id', $id)->with('user')->get();
        return view('frontEnd.Booking.show', compact('meals'));
    }
    
    
}
