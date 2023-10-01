<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonthlyMealRates;
use App\Models\User;
use App\Models\UserMeals;
use App\Models\UserPayments;
use Carbon\Carbon;
use Illuminate\Http\Request;

class userInfoController extends Controller
{
    public function all_info()
    {

        dd($_SERVER);
        $this_month = Carbon::today();
        $userpayment=UserPayments::whereMonth('month', $this_month)->sum('amount',);
        $totalMeal=UserMeals::whereMonth('created_at', $this_month)->sum('quantity',);
        
    
        $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();
        $mealRate = 0;
        if ($Month_check !== null) {
            $mealRate = $Month_check->meal_rate;
        }
       $total_expense=$mealRate * $totalMeal;
       $total_due= $total_expense - $userpayment;

        return response()->json(["Total Amount" => $userpayment, "Total meal" =>$totalMeal, "Total due" =>$total_due, ], 200);
    }
}
