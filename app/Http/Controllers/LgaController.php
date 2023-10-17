<?php

namespace App\Http\Controllers;

use App\Models\Lga;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLgaRequest;
use App\Http\Requests\UpdateLgaRequest;

class LgaController extends Controller
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
     * @param  \App\Http\Requests\StoreLgaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLgaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function show(Lga $lga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function edit(Lga $lga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLgaRequest  $request
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLgaRequest $request, Lga $lga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lga $lga)
    {
        //
    }
}
