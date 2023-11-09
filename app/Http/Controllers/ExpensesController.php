<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use App\Models\ExpensesType;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpensesRequest;
use App\Http\Requests\UpdateExpensesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{


    public function __construct()
    {
        
        $this->middleware('auth');
    }


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expensesType = ExpensesType::all();
        // $allExpenses = Expenses::all();

        $allExpenses = DB::table('expenses')
        ->join('expense_types', 'expenses.expenses_type_id', '=', 'expense_types.id')
        ->select('expenses.*', 'expense_types.name as expense_type_name', 'expenses.description as description', 'expense_types.sort_code as sort_code')
        ->get();
       
        return view("Dashboard.expenses.index", compact('allExpenses', 'expensesType'));
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
     * @param  \App\Http\Requests\StoreExpensesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpensesRequest $request)
    {
        $expense = new Expenses();
        $expense->unit_price = $request->unit_price;
        $expense->amount = $request->amount;
        $expense->description = $request->description; 
        $expense->qty = $request->qty;
        $expense->amount = $request->qty * $request->unit_price;
        $expense->user_id =Auth::user()->id;
        $expense->expenses_type_id = $request->expense_type;
        $expense->save();
        return redirect()->back()->with("message", "New Expenses Type added successfully");
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function show(Expenses $expenses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenses $expenses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpensesRequest  $request
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpensesRequest $request, Expenses $expenses)
    {
        $expense=Expenses::find($request->id);
        $expense->unit_price = $request->unit_price;
        $expense->amount = $request->amount;
        $expense->description = $request->description; 
        $expense->qty = $request->qty;
        $expense->amount = $request->qty * $request->unit_price;
        $expense->user_id = Auth::user()->id;
        $expense->expenses_type_id = $request->expense_type;
        $expense->save();
        return redirect()->back()->with("message", " Expenses  updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expenses  $expenses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $expense = Expenses::find($request->id);
        if ($expense) {
           $delete= $expense->delete();
           if ($delete) {
                return redirect()->back()->with("message", " Expenses  deleted successfully");

           } else {
                return redirect()->back()->with("message", " Error deleting expense");

           }
           
        }
        else {
            return redirect()->back()->with("message", " No expense find with that parameter");

        }
    }
    
    public function filter(Request $request)
    {
        $date = $request->input('date');
        $expenseType = $request->input('expense_type');

        $query = DB::table('expenses')
        ->join('expense_types', 'expenses.expenses_type_id', '=', 'expense_types.id')
        ->select('expenses.*', 'expense_types.name as expense_type_name', 'expense_types.sort_code as sort_code');

        if ($date && $expenseType) {
            // If both date and expense type are selected, filter based on both
            $query->whereDate('expenses.created_at', '=', $date)
                ->where('expense_types.id', '=', $expenseType);
        } elseif ($date) {
            // If only date is selected, filter based on date
            $query->whereDate('expenses.created_at', '=', $date);
        } elseif ($expenseType) {
            // If only expense type is selected, filter based on expense type
            $query->where('expense_types.id', '=', $expenseType);
        }

        // Get the filtered expenses or all expenses if no filters are selected
        $filteredExpenses = $query->get();

        return response()->json($filteredExpenses);
    }
}