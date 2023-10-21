<?php

namespace App\Http\Controllers;

use App\Models\UserPayments;
use Illuminate\Http\Request;
use PDF;

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

  

    public function showPdf()
    {
        $id = auth()->user()->id;
        $userPayments = UserPayments::where('user_id', $id)->get();
    
        // Generate the PDF using the user_payment_pdf view
        $pdf = PDF::loadView('frontEnd.user_payment.user_payment_pdf', ['userPayments' => $userPayments])->setOptions(['defaultFont' => 'sans-serif']);
    
        // Return the PDF as a response with a custom filename
        return $pdf->stream('user_payments.pdf');
    }
    
}
