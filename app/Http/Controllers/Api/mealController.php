<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserMeals;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

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

    public function add_meal()
    {
        return view('admin.meal.add_meal');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', // Assuming user_id must exist in the 'users' table
            'quantity' => 'required|integer|min:1', // Assuming quantity should be an integer greater than or equal to 1
            'date' => 'required|date', // Assuming date should be a valid date format
        ]);
    
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $meal = new UserMeals();
        $meal->user_id = $request->user_id;
        $meal->quantity = $request->quantity;
        $meal->date = $request->date;
        $meal->save();
    
        return back()->with('message', 'Info saved successfully');
    }
    
    // public function search(Request $request)
    // {
    //     $selectedMonth = $request->input('selectedMonth');
    //     $selectedDate = Carbon::createFromFormat('Y-m-d', date('Y') . '-' . $selectedMonth . '-01');
    //     $meals = UserMeals::whereMonth('date', $selectedDate->month)->get();

    //     return view('admin.meal.all_meal', compact('meals'));
    // }

    public function search(Request $request)
    {
        $selectedDate = $request->input('selectedDate');

        // Query your meals based on the selectedDate
        $meals = UserMeals::whereDate('date', $selectedDate)->get();

        return view('admin.meal.all_meal', compact('meals'));
    }




    public function all_meal()
    {
        return view('admin.meal.all_meal', [
            'meals' => UserMeals::with('user')->get()
        ]);
    }

    // public function all_meal()
    // {

    //     $meal=UserMeals::all();
    //     return response()->json(["user" => $meal], 200);
    // }

    public function find($id)
    {
        $meal = UserMeals::find($id);
        return view('admin.meal.edit', compact('meal'));
    }

    // public function find(Request $request, $id)
    // {
    //     $meal = UserMeals::find($id);
    //     return response()->json(["user" => $meal], 200);
    // }



    public function update(Request $request, $id)
    {
        $meal = UserMeals::find($id);
        $meal->user_id = $request->name;
        // $meal->users_id = $request->users_id;
        $meal->quantity = $request->quantity;
        $meal->date = $request->date;
        $meal->update();
        return redirect()->route('admin.meal.all_meal');
    }




    // public function update(Request $request, $id)
    // {
    //     $meal = UserMeals::find($id);
    //     $meal->users_id = $request->users_id;
    //     $meal->quantity = $request->quantity;
    //     $meal->date = $request->date;
    //     $meal->update();
    //     return response()->json(["user" => $meal], 200);
    // }

    public function delete($id)
    {
        UserMeals::where('id', $id)->delete();
        return redirect()->route('admin.meal.all_meal');
    }


    // public function delete($id)
    // {
    //     UserMeals::where('id', $id)->delete();
    //     return response()->json(['message' => 'Info delete successfully'], 200);
    // }
}
