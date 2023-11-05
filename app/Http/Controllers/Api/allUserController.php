<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonthlyMealRates;
use App\Models\User;
use App\Models\UserMeals;
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
        return view('admin.user.all_user', compact('userinfo'));
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
    public function searchUsers(Request $request)
    {
        $searchTerm = $request->input('search');

        $userinfo = User::where('name', 'like', "%$searchTerm%")
            ->orWhere('mobile', 'like', "%$searchTerm%")
            ->orWhere('department', 'like', "%$searchTerm%")
            ->get();

        return view('admin.user.all_user', compact('userinfo'));
    }
    
    public function delete($id)
    {
        // @dd($id);
        User::where('id', $id)->delete();
        return redirect()->route('admin.user.all_user');

    }

    public function details($id)
    {
        $meal = UserMeals::select('date', 'quantity')->where('id', $id)->first();
        $user_meals = User::where('status', 1)
            ->where('user_role', 'User')
            ->where('id', $id)
            ->select('*')
            ->with([
                'userMeal' => function ($meal) {
                    $meal->with(['meal_rate']);
                },
                'userpayments'
            ])
            ->first();
    
        $total_meal_payable = 0;
        foreach ($user_meals->userMeal as $key => $meal) {
            if ($meal->meal_rate) { // Check if meal_rate exists
                $total_meal_calc = $meal->quantity * $meal->meal_rate->meal_rate;
                $total_meal_payable += $total_meal_calc;
            }
        }
    
        $total_user_payment = 0;
        foreach ($user_meals->userpayments as $key => $payment) {
            $total_user_payment += $payment->amount;
        }
    
        $user_due = $total_user_payment - $total_meal_payable;
    
        $user_meals->total_payment = $total_user_payment;
        $user_meals->total_payable = $total_meal_payable;
        $user_meals->due = $user_due;
    
        return view('admin.user.details', [
            'user_meals' => $user_meals,
            'meal' => $meal
        ]);
    }
    
}
