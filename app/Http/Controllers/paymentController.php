<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPayments;

class paymentController extends Controller
{
    public function add_payment(){
        return view('admin.user_payment.add_payment');
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',     
            'month' => 'required',       
            'payment_date' => 'required', 
            'amount' => 'required|numeric' 
        ]);
    
        $Payments = new UserPayments();
        $Payments->user_id = $request->user_id;
        $Payments->month = $request->month;
        $Payments->payment_date = $request->payment_date;
        $Payments->amount = $request->amount;
        $Payments->save();
    
        return back()->with('message', 'Info saved successfully');
    }
    
    public function all_user_payment()
    {
        return view('admin.user_payment.all_payment', [
            'Payments' => UserPayments::with('user')->get()
        ]);
    }
    
}
