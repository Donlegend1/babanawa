<?php

namespace App\Http\Controllers;

use App\Models\PrelimsResults;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrelimsResultsRequest;
use App\Http\Requests\UpdatePrelimsResultsRequest;

class PrelimsResultsController extends Controller
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
     * @param  \App\Http\Requests\StorePrelimsResultsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrelimsResultsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrelimsResults  $prelimsResults
     * @return \Illuminate\Http\Response
     */
    public function show(PrelimsResults $prelimsResults)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrelimsResults  $prelimsResults
     * @return \Illuminate\Http\Response
     */
    public function edit(PrelimsResults $prelimsResults)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrelimsResultsRequest  $request
     * @param  \App\Models\PrelimsResults  $prelimsResults
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrelimsResultsRequest $request, PrelimsResults $prelimsResults)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrelimsResults  $prelimsResults
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrelimsResults $prelimsResults)
    {
        //
    }
}
