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
    // public function Meal_Booking(){
    //     $meal=UserMeals::sum('quantity');
    //     $payment=UserPayments::sum('amount');

    //     $this_month = Carbon::today();
    //     $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();
    //     $mealRate = 0;
    //     if ($Month_check !== null) {
    //         $mealRate = $Month_check->meal_rate;
    //     }

    //     $userinfo = User::where('user_role', 'User')->select('id', 'user_role', 'name', 'mobile')->with(['userpayments' => function ($q) {
    //         $q->select('id', 'amount', 'users_id');
    //     }])->with(['userMeal' => function ($r) {
    //         $r->select('id', 'quantity', 'user_id');
    //     }])
    //         ->withSum('userpayments', 'amount')
    //         ->withSum('userMeal', 'quantity')
    //         ->get();
    //     foreach ($userinfo as $user) {
         
    //         $total_payable = $mealRate * $user->user_meal_sum_quantity;
    //         $due = $total_payable - $user->userpayments_sum_amount;
    //         $user->due = $due;
    //     }

    //     return view('frontEnd.Meal_Booking.Meal_Booking',compact('meal','payment','userinfo','due'));
    // }
    
    // public function Meal_Booking(){
    //     $id = auth()->user()->id; 
    
    //     $meal = UserMeals::where('user_id', $id)->sum('quantity');
    //     $payment = UserPayments::where('user_id', $id)->sum('amount');
    
    //     $this_month = Carbon::today();
    //     $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();
    //     $mealRate = 0;
    //     if ($Month_check !== null) {
    //         $mealRate = $Month_check->meal_rate;
    //     }
    
    //     $userinfo = User::where('id', $id)
    //         ->select('id', 'user_role', 'name', 'mobile')
    //         ->with(['userpayments' => function ($q) {
    //             $q->select('id', 'amount', 'user_id');
    //         }])
    //         ->with(['userMeal' => function ($r) {
    //             $r->select('id', 'quantity', 'user_id');
    //         }])
    //         ->withSum('userpayments', 'amount')
    //         ->withSum('userMeal', 'quantity')
    //         ->get();
    
    //     foreach ($userinfo as $user) {
    //         $total_payable = $mealRate * $user->userMeal_sum_quantity;
    //         $due = $total_payable - $user->userpayments_sum_amount;
    //         $user->due = $due;
    //     }
    
    //     return view('frontEnd.Meal_Booking.Meal_Booking', compact('meal', 'payment', 'userinfo','due'));
    // }
    
    // public function Meal_Booking(){
    //     $id = auth()->user()->id; 
    
    //     $meal = UserMeals::where('user_id', $id)->sum('quantity');
    //     $payment = UserPayments::where('user_id', $id)->sum('amount');
    
    //     $this_month = Carbon::now()->format('m');
    //     $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();

    //     // dd($Month_check);
    //     $mealRate = 0;
    //     if ($Month_check !== null) {
    //         $mealRate = $Month_check->meal_rate;
    //     }
    
    //     $user = User::where('id', $id)
    //         ->select('id', 'user_role', 'name', 'mobile')
    //         ->with(['userpayments' => function ($q) {
    //             $q->select('id', 'amount', 'user_id');
    //         }])
    //         ->with(['userMeal' => function ($r) {
    //             $r->select('id', 'quantity', 'user_id');
    //         }])
    //         ->withSum('userpayments', 'amount')
    //         ->withSum('userMeal', 'quantity')
    //         ->first();
    
    //     // dd($user); 
    
    //     $total_payable = $mealRate * $user->userMeal_sum_quantity;
    //     // dd($total_payable,$user->userMeal_sum_quantity,$user,$mealRate,$this_month);
    //     $due = $total_payable - $user->userpayments_sum_amount;
        
    //     // dd($due); 
    
    //     return view('frontEnd.Meal_Booking.Meal_Booking', compact('meal', 'payment', 'user', 'due'));
    // }
    
    
    public function Meal_Booking()
    {
        $id = auth()->user()->id;

        $Totalmeal=UserMeals::where('user_id', $id)->sum('quantity');
        $payment=UserPayments::where('user_id', $id)->sum('amount');
        $this_month = Carbon::today();
        $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();
        $mealRate = 0;
        if ($Month_check !== null) {
            $mealRate = $Month_check->meal_rate;
        }

        $userinfo = User::where('user_role', 'User')->select('id', 'name', 'mobile', 'department')->with(['userpayments' => function ($q) {
            $q->select('id', 'amount', 'user_id');
        }])->with(['userMeal' => function ($r) {
            $r->select('id', 'quantity', 'user_id');
        }])
            ->withSum('userpayments', 'amount')
            ->withSum('userMeal', 'quantity')
            ->get();
        foreach ($userinfo as $user) {

            $total_payable = $mealRate * $user->user_meal_sum_quantity;
            $due = $total_payable - $user->userpayments_sum_amount;
            $user->due = $due;
        }
        // return response()->json(["User details" => $userinfo, "monthly meal rate" => $Month_check], 200);
        return view('frontEnd.Meal_Booking.Meal_Booking', compact('userinfo','Totalmeal','payment','due','mealRate'));
    }
    
    
}
