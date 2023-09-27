<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserMeals;
use App\Models\UserPayments;
use Illuminate\Http\Request;

class userInfoController extends Controller
{
    public function all_info()
    {
        $userpayment=UserPayments::sum('amount',);
        $totalMeal=UserMeals::sum('quantity',);

        return response()->json(["Total Amount" => $userpayment, "Total meal" =>$totalMeal], 200);
    }
}
