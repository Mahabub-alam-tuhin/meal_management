<?php

namespace App\Http\Controllers;

use App\Models\UserMeals;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class frontEndBookingController extends Controller
{
    public function add_user_Meal_Booking()
    {
        return view('frontEnd.Booking.add_user_Meal_Booking');
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user_id = auth()->user()->id;
        $selected_date = Carbon::parse($request->date)->format('Y-m-d');
        $current_date = Carbon::now()->format('Y-m-d');
        // @dd($current_date);
        if ($selected_date === $current_date) {
            return redirect()->back()->with('error_today', 'Cannot book a meal for today.');
        } elseif ($selected_date < $current_date) {
            return redirect()->back()->with('error', 'Cannot book a meal for a past date.');
        }

        $currentTime = Carbon::now();
        $meal_set_last_time = Carbon::today()->setHour(18)->setMinute(0)->setSecond(0);


        if ($currentTime->lte($meal_set_last_time)) {
            $meals = new UserMeals();
            $meals->user_id = $user_id;
            $meals->quantity = $request->quantity;
            $meals->date = $selected_date;
            $meals->save();
            return redirect()->back()->with('success', 'Meal booked successfully.');
        } else {
            return redirect()->back()->with('error', 'Please contact the admin.');
        }
    }



    public function show()
    {
        // dd(auth()->user());
        $id = auth()->user()->id;
        $meals = UserMeals::where('user_id', $id)->with('user')
            // ->orderBy('date', 'desc')
            ->get();
        return view('frontEnd.Booking.show', compact('meals'));
    }

    //     public function show()
    // {
    //     $id = auth()->user()->id;
    //     $meals = UserMeals::where('user_id', $id)
    //         ->with('user')
    //         ->orderBy('date', 'desc') // Order by 'date' column in descending order
    //         ->get();

    //     return view('frontEnd.Booking.show', compact('meals'));
    // }

    public function edit($id)
    {
        $meals = UserMeals::find($id);
        return view('frontEnd.Booking.edit', compact('meals'));
    }
    public function update(Request $request, $id)
    {

        $meals = UserMeals::find($id);
        $selected_date = Carbon::parse($request->date); // Parse the selected date
        $current_date = Carbon::now(); // Get the current date

        // Check if the selected date is in the past
        if ($selected_date->lt($current_date)) {
            return redirect()->back()->with('error', 'Cannot book a meal for a past date.');
        }
        // $meals->name = $request->name;
        $meals->quantity = $request->quantity;
        $meals->date = $request->date;
        $meals->update();
        return redirect()->route('frontEnd.Booking.show');
    }

    public function delete($id)
    {
        UserMeals::where('id', $id)->delete();
        return redirect()->route('frontEnd.Booking.show');
    }

    public function search(Request $request)
    {
        $id = auth()->user()->id;
        $meals = UserMeals::where('user_id', $id)->with('user')->where('user_id', $id);

        if ($request->has('search_month')) {
            $searchMonth = Carbon::parse($request->input('search_month'));
            $meals->whereMonth('date', $searchMonth->month);
            $meals->whereYear('date', $searchMonth->year);
        } else {
            return redirect()->back()->with('error', 'You does not have any  meal this month.');
        }

        $meals = $meals->get();

        if ($meals->isEmpty()) {
            return redirect()->back()->with('error', 'You does not have any  meal this month.');
        }

        return view('frontEnd.Booking.show', compact('meals'));
    }
}
