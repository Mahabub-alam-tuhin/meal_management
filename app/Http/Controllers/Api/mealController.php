<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserMeals;
use Illuminate\Http\Request;

class mealController extends Controller
{
     // public function add_meal(){
    //     return 'text';
    // }

    // public function store()
    // {
    //      dd(request()->all());
    //     $meal = new UserMeals();
    //     $meal->users_id = request()->users_id;
    //     $meal->quantity = request()->quantity;
    //     $meal->date = request()->date;
    //     $meal->save();
    //     return response()->json('message', 'Info save successfully');
    //     return response()->json(['message' => 'Info save successfully'], 200);
    // }

    public function all_meal()
    {
        
        $meal=UserMeals::all();
        return response()->json(["user" => $meal], 200);
    }

    public function find($id)
    {
        $meal = UserMeals::find($id);
        return response()->json(["user" => $meal], 200);
    }

    public function update(Request $request, $id)
    {
        $meal = UserMeals::find($id);
        $meal->users_id = $request->users_id;
        $meal->quantity = $request->quantity;
        $meal->date = $request->date;
        $meal->update();
        return response()->json(["user" => $meal], 200);
    }

    public function delete($id)
    {
        UserMeals::where('id', $id)->delete();
        return response()->json(['message' => 'Info delete successfully'], 200);
    }
}
