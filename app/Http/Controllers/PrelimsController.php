<?php

namespace App\Http\Controllers;

use App\Models\Prelims;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrelimsRequest;
use App\Http\Requests\UpdatePrelimsRequest;

class PrelimsController extends Controller
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
     * @param  \App\Http\Requests\StorePrelimsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrelimsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prelims  $prelims
     * @return \Illuminate\Http\Response
     */
    public function show(Prelims $prelims)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prelims  $prelims
     * @return \Illuminate\Http\Response
     */
    public function edit(Prelims $prelims)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrelimsRequest  $request
     * @param  \App\Models\Prelims  $prelims
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrelimsRequest $request, Prelims $prelims)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prelims  $prelims
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prelims $prelims)
    {
        //
    }
}
