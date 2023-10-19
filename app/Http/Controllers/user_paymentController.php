<?php

namespace App\Http\Controllers;

use App\Models\UserPayments;
use Illuminate\Http\Request;

class user_paymentController extends Controller
{
    // public function show(){
    //     return view('frontEnd.user_payment.show');
    // }
 public function show()
{
    $id = auth()->user()->id; 
    $userPayments = UserPayments::where('user_id', $id)->get();
    return view('frontEnd.user_payment.show', [
        'userPayments' => $userPayments
    ]);
}

}
