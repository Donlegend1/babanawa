<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    //

    public function home(Request $request)
    {

       // return view('welcome');

       $users =  DB::table('users')->get();
       $Settings =  DB::table('Settings')->get()->first();

       $allpaymnt =  DB::table('Payments')->get();

       $directen =  DB::table('directentries')->get();

       $prelimentries =  DB::table('prelimentries')->get();


    //  return $allpaymnt->sum('AmountPaid');


        return view('welcome', array
        (
            'users' => count($users),
            'directfee' => $Settings,
            'paymnentsall' => $allpaymnt,
            'directentries' => $directen,
            'prelimentries' =>  $prelimentries
            
           // 'total' => $investments->sum('amount'),

        ));
    }






}
