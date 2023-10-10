<?php

namespace App\Http\Controllers;
use App\Models\UserMeals;
use App\Models\UserPayments;
use App\Models\MonthlyMealRates;
use App\Models\User;

use Carbon\Carbon;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function Meal_Booking(){
        $meal=UserMeals::sum('quantity');
        $payment=UserPayments::sum('amount');

        $this_month = Carbon::today();
        $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();
        $mealRate = 0;
        if ($Month_check !== null) {
            $mealRate = $Month_check->meal_rate;
        }

        $userinfo = User::where('user_role', 'User')->select('id', 'user_role', 'name', 'mobile')->with(['userpayments' => function ($q) {
            $q->select('id', 'amount', 'users_id');
        }])->with(['userMeal' => function ($r) {
            $r->select('id', 'quantity', 'name');
        }])
            ->withSum('userpayments', 'amount')
            ->withSum('userMeal', 'quantity')
            ->get();
        foreach ($userinfo as $user) {
         
            $total_payable = $mealRate * $user->user_meal_sum_quantity;
            $due = $total_payable - $user->userpayments_sum_amount;
            $user->due = $due;
        }

        return view('frontEnd.Meal_Booking.Meal_Booking',compact('meal','payment','userinfo','due'));
    }
}
