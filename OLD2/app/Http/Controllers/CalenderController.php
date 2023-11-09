<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalenderController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        //$this->middleware('auth');
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function remcalender()
    {
        return view('Dashboard/School-Calender/calender');
    }
}
