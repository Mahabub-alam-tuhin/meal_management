<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\daily_expense;
use Illuminate\Http\Request;

class dailyExpenseController extends Controller
{
    public function all_expense(){
        $expense=daily_expense::all();
        return response()->json(["expenses" => $expense], 200);
    }

    public function find($id)
    {
        $expense = daily_expense::find($id);
        return response()->json(["expenses" => $expense], 200);
    }
    public function update(Request $request, $id)
    {
        $expenses = daily_expense::find($id);
        $expenses->title=$request->title	;
        $expenses->quantity =$request->quantity;
        $expenses->unit =$request->unit;
        $expenses->price =$request->price;
        $expenses->total =$request->total;
        $expenses->bajar_date =$request->bajar_date;
        $expenses->status =$request->status;
        $expenses->update();
        return response()->json(["meal" => $expenses], 200);
    }

    public function delete($id)
    {
        daily_expense::where('id', $id)->delete();
        return response()->json(['message' => 'Info delete successfully'], 200);
    }
}
