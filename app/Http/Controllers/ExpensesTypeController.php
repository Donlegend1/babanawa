<?php

namespace App\Http\Controllers;

use App\Models\ExpensesType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpensesTypeRequest;
use App\Http\Requests\UpdateExpensesTypeRequest;
use App\Models\Expenses;
use App\Models\PaidFor;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ExpensesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expensesType = ExpensesType::where("school_id", Auth::user()->school_id)->with('source')->get();
        $associates = PaidFor::all();
        return view("Dashboard.expenses.expenseType", compact('expensesType', 'associates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpensesTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpensesTypeRequest $request)
    {
      
        
            $expensesType = new ExpensesType();
            $expensesType->name = $request->name;
            $expensesType->source_id = $request->source_id;
            $expensesType->school_id = Auth::user()->school_id;
            $expensesType->sort_code = $request->sort_code;
            $expensesType->description = $request->description;
            $expensesType->save();
            return redirect()->back()->with("message", "Expense Type saved successfully");

           
        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpensesType  $expensesType
     * @return \Illuminate\Http\Response
     */
    public function show(ExpensesType $expensesType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpensesType  $expensesType
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpensesType $expensesType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpensesTypeRequest  $request
     * @param  \App\Models\ExpensesType  $expensesType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpensesTypeRequest $request, ExpensesType $expensesType)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpensesType  $expensesType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $expensesType = ExpensesType::find($request->id);

        if ($expensesType) {
            $relatedExpenses = Expenses::where('expenses_type_id', $expensesType->id)->first();

            if (!$relatedExpenses) {
                $expensesType->delete();
                return redirect()->back()->with("message", "Expense Type deleted successfully");
            } else {
                return redirect()->back()->with("message", "Cannot delete Expense Type: related Expenses found");
            }
        } else {
            return redirect()->back()->with("message", "Expense Type not found");
        }
    }

}