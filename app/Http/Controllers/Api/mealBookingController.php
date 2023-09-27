<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\UserMeals;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class mealBookingController extends Controller
{

    public function all_meal()
    {
        $meal=UserMeals::all();
        return response()->json(["meal" => $meal], 200);
    }

    public function store(Request $request)
    {
        // $storeMeal = new UserMeals();
 
        $currentTime = Carbon::now();
        $meat_set_last_time = Carbon::today()->setHour(18)->setMinute(0)->setSecond(0);

        if ($currentTime->lte($meat_set_last_time)) {
            $storeMeal = new UserMeals();
            $storeMeal->users_id = $request->users_id;
            $storeMeal->quantity = $request->quantity;
            $storeMeal->date = $request->date;
            $storeMeal->status = $request->status;
            $storeMeal->save();
            return response()->json(["meal_Booking" => $storeMeal,'message' => 'Booking  has been done' ], 200);

        } else {
            return response()->json(['message' => 'Booking deadline has passed,Please contact with admin'], 400);
        }

    }
}
