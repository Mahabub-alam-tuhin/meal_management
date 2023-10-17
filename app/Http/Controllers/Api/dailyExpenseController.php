<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\daily_expense;
use Illuminate\Http\Request;

class dailyExpenseController extends Controller
{
    public function add_expense(){
        return view('admin.daily_expense.add_expense');
    }
    public function store(Request $request)
    {
        //        dd(request()->all());
        $expense = new daily_expense();
        $expense->title = $request->title;
        $expense->quantity = $request->quantity;
        $expense->unit = $request->unit;
        $expense->price = $request->price;
        $expense->total = $request->total;
        $expense->bajar_date = $request->bajar_date;
        // $expense->status = $request->status;
        $expense->save();
        return back()->with('message', 'Info save successfully');
    }

    public function all_expense()
    {
        return view ('admin.daily_expense.all_expense', [
            'expense' => daily_expense::all()
        ]);
    }

    // public function all_expense(){
    //     $expense=daily_expense::all();
    //     return response()->json(["expenses" => $expense], 200);
    // }

    public function find($id)
    {
        $expense = daily_expense::find($id);
        return view('admin.daily_expense.edit', compact('expense'));
    }

    // public function find($id)
    // {
    //     $expense = daily_expense::find($id);
    //     return response()->json(["expenses" => $expense], 200);
    // }
    public function update(Request $request, $id)
    {
        $expenses = daily_expense::find($id);
        $expenses->title=$request->title	;
        $expenses->quantity =$request->quantity;
        $expenses->unit =$request->unit;
        $expenses->price =$request->price;
        $expenses->total =$request->total;
        $expenses->bajar_date =$request->bajar_date;
        // $expenses->status =$request->status;
        $expenses->update();
        return redirect()->route('admin.daily_expense.all_expense');

    }

    // public function update(Request $request, $id)
    // {
    //     $expenses = daily_expense::find($id);
    //     $expenses->title=$request->title	;
    //     $expenses->quantity =$request->quantity;
    //     $expenses->unit =$request->unit;
    //     $expenses->price =$request->price;
    //     $expenses->total =$request->total;
    //     $expenses->bajar_date =$request->bajar_date;
    //     $expenses->status =$request->status;
    //     $expenses->update();
    //     return response()->json(["meal" => $expenses], 200);
    // }

    public function delete($id)
    {
        // @dd($id);
        daily_expense::where('id', $id)->delete();
        return redirect()->route('admin.daily_expense.all_expense');

    }
    
    
    // public function delete($id)
    // {
    //     daily_expense::where('id', $id)->delete();
    //     return response()->json(['message' => 'Info delete successfully'], 200);
    // }

    public function search(Request $request)
    {
        $searchText = $request->input('searchText');
        $selectedDate = $request->input('selectedDate');
    
        $query = daily_expense::query();
    
        if (!empty($searchText)) {
            $query->where(function ($subQuery) use ($searchText) {
                $subQuery->where('title', 'like', "%$searchText%")
                    ->orWhere('quantity', 'like', "%$searchText%")
                    ->orWhere('unit', 'like', "%$searchText%")
                    ->orWhere('price', 'like', "%$searchText%")
                    ->orWhere('total', 'like', "%$searchText%")
                    ->orWhere('bajar_date', 'like', "%$searchText%");
            });
        }
    
        if (!empty($selectedDate)) {
            $query->whereDate('bajar_date', $selectedDate);
        }
    
        $expense = $query->get();
    
        return view('admin.daily_expense.all_expense', compact('expense'));
    }
    
}
