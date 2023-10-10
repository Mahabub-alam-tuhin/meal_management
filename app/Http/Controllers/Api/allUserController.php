<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonthlyMealRates;
use App\Models\User;
use Carbon\Carbon;
use App\Models\UserPayments;
use Illuminate\Http\Request;

class allUserController extends Controller
{
    public function all_user()
    {
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
        // return response()->json(["User details" => $userinfo, "monthly meal rate" => $Month_check], 200);
        return view ('admin.user.all_user',compact('userinfo'));
    }

    // public function all_user()
    // {
    //     $this_month = Carbon::today();
    //     $Month_check = MonthlyMealRates::whereMonth('month', $this_month)->first();
    //     $mealRate = 0;
    //     if ($Month_check !== null) {
    //         $mealRate = $Month_check->meal_rate;
    //     }

    //     $userinfo = User::where('user_role', 'User')->select('id', 'user_role', 'name', 'mobile')->with(['userpayments' => function ($q) {
    //         $q->select('id', 'amount', 'users_id');
    //     }])->with(['userMeal' => function ($r) {
    //         $r->select('id', 'quantity', 'users_id');
    //     }])
    //         ->withSum('userpayments', 'amount')
    //         ->withSum('userMeal', 'quantity')
    //         ->get();
    //     foreach ($userinfo as $user) {
    //         $total_payable = $mealRate * $user->user_meal_sum_quantity;
    //         $due = $total_payable - $user->userpayments_sum_amount;
    //         $user->due = $due;
    //     }
    //     return response()->json(["User details" => $userinfo, "monthly meal rate" => $Month_check], 200);

    // }
}
