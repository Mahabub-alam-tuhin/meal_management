<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MonthlyMealRates;
use Illuminate\Http\Request;

class mealRateController extends Controller
{
   public function add_meal_rate(){
    return view('admin.meal_rate.add_meal_rate');
   }
   
   public function store(Request $request)
   {
       //        dd(request()->all());
       $meal = new MonthlyMealRates();
       $meal->month = $request->month;
       $meal->meal_rate = $request->meal_rate;
       $meal->is_visible = $request->is_visible;
       $meal->month_start_date = $request->month_start_date;
       $meal->month_end_date = $request->month_end_date;
       $meal->status = $request->status;
       $meal->save();
       return back()->with('message', 'Info save successfully');

       //        return $request;

   }

    public function all_meal_rate()
    {
        return view ('admin.meal_rate.all_meal_rate', [
            'mealRate' => MonthlyMealRates::all()
        ]);
    }

    // public function all_meal_rate()
    // {
    //     $mealRate=MonthlyMealRates::all();
    //     return response()->json(["meal" => $mealRate], 200);
    // }

    public function find($id)
    {
        $mealRate = MonthlyMealRates::find($id);
        return view('admin.meal_rate.edit', compact('mealRate'));
    }

    // public function find($id)
    // {
    //     $mealRate = MonthlyMealRates::find($id);
    //     return response()->json(["user" => $mealRate], 200);
    // }

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
        return redirect()->route('admin.meal_rate.all_meal_rate');
    }


    // public function update(Request $request, $id)
    // {
    //     $mealRate = MonthlyMealRates::find($id);
    //     $mealRate->	month = $request->	month;
    //     $mealRate->meal_rate = $request->meal_rate;
    //     $mealRate->is_visible = $request->is_visible;
    //     $mealRate->month_start_date = $request->month_start_date;
    //     $mealRate->month_end_date = $request->month_end_date;
    //     $mealRate->status = $request->status;
    //     $mealRate->update();
    //     return response()->json(["meal" => $mealRate], 200);
    // }

    public function delete($id)
    {
        MonthlyMealRates::where('id', $id)->delete();
        return redirect()->route('admin.meal_rate.all_meal_rate');
    }

    // public function delete($id)
    // {
    //     MonthlyMealRates::where('id', $id)->delete();
    //     return response()->json(['message' => 'Info delete successfully'], 200);
    // }
}
