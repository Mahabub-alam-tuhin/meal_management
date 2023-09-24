<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonthlyMealRates;
use Illuminate\Http\Request;

class mealRateController extends Controller
{
    public function all_meal_rate()
    {
        $mealRate=MonthlyMealRates::all();
        return response()->json(["meal" => $mealRate], 200);
    }
    public function find($id)
    {
        $mealRate = MonthlyMealRates::find($id);
        return response()->json(["user" => $mealRate], 200);
    }

    public function update(Request $request, $id)
    {
        $mealRate = MonthlyMealRates::find($id);
        $mealRate->	month = $request->	month;
        $mealRate->meal_rate = $request->meal_rate;
        $mealRate->is_visible = $request->is_visible;
        $mealRate->month_start_date = $request->month_start_date;
        $mealRate->month_end_date = $request->month_end_date;
        $mealRate->status = $request->status;
        $mealRate->update();
        return response()->json(["meal" => $mealRate], 200);
    }

    public function delete($id)
    {
        MonthlyMealRates::where('id', $id)->delete();
        return response()->json(['message' => 'Info delete successfully'], 200);
    }
}
