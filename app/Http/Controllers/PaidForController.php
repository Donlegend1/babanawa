<?php

namespace App\Http\Controllers;

use App\Models\PaidFor;
use App\Http\Requests\StorePaidForRequest;
use App\Http\Requests\UpdatePaidForRequest;

class PaidForController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePaidForRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaidForRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaidFor  $paidFor
     * @return \Illuminate\Http\Response
     */
    public function show(PaidFor $paidFor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaidFor  $paidFor
     * @return \Illuminate\Http\Response
     */
    public function edit(PaidFor $paidFor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaidForRequest  $request
     * @param  \App\Models\PaidFor  $paidFor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaidForRequest $request, PaidFor $paidFor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaidFor  $paidFor
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaidFor $paidFor)
    {
        //
    }
}
