<?php

namespace App\Http\Controllers;

use App\Models\ExpensesType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExpensesTypeRequest;
use App\Http\Requests\UpdateExpensesTypeRequest;

class ExpensesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Dashboard.expenses.expenseType");
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
      $expensesType->name=$request->name;
      $expensesType->save();
      return redirect()->back()->with("message", "New Expenses Type added successfully");
      
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpensesType  $expensesType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpensesType $expensesType)
    {
        //
    }
}