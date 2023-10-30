<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMeals;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    // public function all_details($id){
    //     return view('frontEnd.details');
    // }
    public function all_details($id)
    { 
        {
            // $user_meals = $this->sinlge_due_list(auth()->user()->id);
            // dd($user_meals);
            // $meal = UserMeals::select('date', 'quantity')->where('id', $id)->get();
            $user_meals = User::where('status', 1)->where('user_role', 'User')->where('id', $id)->select('*')->with([
                'userMeal' => function ($meal) {
                    $meal->with(['meal_rate']);
                }, 'userpayments'
            ])->first();

            // dd($user_meals);

            $total_meal_payable = 0;
            
            foreach ($user_meals->userMeal as $key => $meal) {
                // @dd($user_meals->userMeal);
            $total_meal_calc = $meal->quantity * $meal->meal_rate?->meal_rate ?? 0;

                $total_meal_payable += $total_meal_calc;
                // @dd($total_meal_payable);
            }
            $total_user_payment = 0;
            foreach ($user_meals->userpayments as $key => $payment) {
                $total_user_payment += $payment->amount;
            }
             
           
            $user_due = $total_user_payment - $total_meal_payable;


            $user_meals->total_payment = $total_user_payment;
            $user_meals->total_payable = $total_meal_payable;
            $user_meals->due = $user_due;


            return view('frontEnd.user_payment_details.details', [
                'user_meals' => $user_meals,
                // 'meal' => $meal
            ]);
        }
    }

    public function showPdf($id)
    {

        $meal = UserMeals::select('date', 'quantity')->where('id', $id)->get();
        
        $user_meals = User::where('status', 1)
            ->where('user_role', 'User')
            ->where('id', $id)
            ->select('*')
            ->with(['userMeal' => function ($meal) {
                $meal->with(['meal_rate']);
            }, 'userpayments'])
            ->first();
    
        // Calculate total meal payable
        $total_meal_payable = 0;
        foreach ($user_meals->userMeal as $meal) {
            $total_meal_calc = $meal->quantity * $meal->meal_rate->meal_rate;
            $total_meal_payable += $total_meal_calc;
        }
    
        // Calculate total user payment
        $total_user_payment = 0;
        foreach ($user_meals->userpayments as $payment) {
            $total_user_payment += $payment->amount;
        }
    
        // Calculate user due
        $user_due = $total_user_payment - $total_meal_payable;
    
        // Set the calculated values into the $user_meals object
        $user_meals->total_payment = $total_user_payment;
        $user_meals->total_payable = $total_meal_payable;
        $user_meals->due = $user_due;
    
        // Generate a PDF with user payment details
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('frontEnd.user_payment_details.generate_pdf', [
            'user_meals' => $user_meals,
            'meal' => $meal,
        ])->setOptions(['defaultFont' => 'sans-serif']);
    
        // Download the PDF
        return $pdf->download('details.pdf');
    }
    

}
