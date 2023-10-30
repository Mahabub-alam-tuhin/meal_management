<?php

namespace App\Http\Controllers;

use App\Models\MonthlyMealRates;
use App\Models\User;
use App\Models\UserMeals;
use App\Models\UserPayments;
use Illuminate\Http\Request;

class duelistcontroller extends Controller
{
    public function duelist()
    {
        // $user_meals = $this->sinlge_due_list(auth()->user()->id);
        // dd($user_meals);
        $user_meals = User::where('status' , 1)->where('user_role', 'User')->select('*')->with([
            'userMeal' => function($meal) {
                $meal->with(['meal_rate']);
            }, 'userpayments'
        ])->get();
        
        // dd($user_meals);
        foreach ($user_meals as $key => $user_meal) {
            $total_meal_payable = 0;
            foreach ($user_meal->userMeal as $key => $meal) {
                $total_meal_calc = $meal->quantity * $meal->meal_rate->meal_rate;
                $total_meal_payable += $total_meal_calc;
            }
            $total_user_payment = 0;
            foreach ($user_meal->userpayments as $key => $payment) {
                $total_user_payment += $payment->amount;
            }

            $user_due = $total_user_payment - $total_meal_payable;


            $user_meal->total_payment = $total_user_payment;
            $user_meal->total_payable = $total_meal_payable;
            $user_meal->due = $user_due;
        }
    
        return view('admin.duelist.view', [
            'user_meals' => $user_meals
        ]);
    }
    

    public function sinlge_due_list($id)
    {

        $user_meals = User::where('status' , 1)->where('id',$id)->where('user_role', 'User')->select('*')->with([
            'userMeal' => function($meal) {
                $meal->with(['meal_rate']);
            }, 'userpayments'
        ])->first();
        
        // dd($user_meals);
      
            $total_meal_payable = 0;
            if($user_meals->userMeal) {
                foreach ($user_meals->userMeal as $key => $meal) {
                    $total_meal_calc = $meal->quantity * $meal->meal_rate->meal_rate;
                    $total_meal_payable += $total_meal_calc;
                }
            }
            if($user_meals->userpayments) {
                $total_user_payment = 0;
                foreach ($user_meals->userpayments as $key => $payment) {
                    $total_user_payment += $payment->amount;
                }

                $user_due = $total_user_payment - $total_meal_payable;


                $user_meals->total_payment = $total_user_payment;
                $user_meals->total_payable = $total_meal_payable;
                $user_meals->due = $user_due;
            }
            
            
   
        return $user_meals;
        // return view('admin.duelist.view', [
        //     'user_meals' => $user_meals
        // ]);
    }
}
