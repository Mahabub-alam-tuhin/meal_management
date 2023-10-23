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
        // Fetch user meals and meal rates
        $UserFinalData = [];
        $userMeals = UserMeals::select('user_id', 'date', 'quantity')->get()->toArray();
        $mealRates = MonthlyMealRates::select('month', 'meal_rate')->get()->toArray();
        $userPaymentData = UserPayments::select('user_id', 'amount')
        // ->where('month',$month)
        ->groupBy('user_id', 'month','amount')
        ->get();
        $monthlyCosts = [];

        foreach ($userMeals as $meal) {

            $userId = $meal['user_id'];
            $date = $meal['date'];
            $quantity = $meal['quantity'];
            $month = date('Y-m', strtotime($date));
            $userRate = 0;
            foreach ($mealRates as $rate) {
                $rateMonth = date('Y-m', strtotime($rate['month']));
                if ($rateMonth === $month) {
                    $userRate = $rate['meal_rate'];
                    break;
                }
            }


            if (!isset($monthlyCosts[$userId][$month]['total_cost'])) {
                $monthlyCosts[$userId][$month]['total_cost'] = 0;
            }

            $cost = $monthlyCosts[$userId][$month]['total_cost'] += $quantity * $userRate;
            $monthlyCosts[$userId][$month]['quantity'] = $quantity;
            $monthlyCosts[$userId][$month]['userId'] = $userId;
            $monthlyCosts[$userId][$month]['month'] = $month;
            $monthlyCosts[$userId][$month]['userRate'] = $userRate;
            $monthlyCosts[$userId][$month]['cost'] = $cost;
        }
        
      
        
        
        $dues = [];
        foreach ($monthlyCosts as $userId => $userData) {
            foreach ($userData as $month => $data) {
                $cost = $data['cost'];
                $paymentAmount = $userPaymentData[$userId]['amount'] ?? 0;
                $dues[$userId][$month] = $cost - $paymentAmount;
            }
        }
    
        return view('admin.duelist.view', [
            'monthlyCosts' => $monthlyCosts,
            'userPaymentData' => $userPaymentData,
            'dues' => $dues,
        ]);
    }
}
