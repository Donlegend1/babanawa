<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Remedials;
use App\Models\User;
use DB;


class DashboardController extends Controller
{
    public function __construct()
    {
        
        //$this->middleware('auth');
        $this->middleware('guest', ['except' => 'logout']);
    }
    

    public function index(){

        $allRem =Remedials::with('user')->get();

      $totalRemmedials =   Remedials::all()->sum('amountPaid');

    
        return view('Dashboard/dashboard',[
            'totalRem' => $totalRemmedials,
            'allrem' => $allRem,
          //  "admissionstep1" => $admissionstep1
            
        ]);
    }


    public function engineering(){

        return view('Dashboard/dashboardEngineering');
    }


    public function certificate(){

        return view('Dashboard/Certdashboard');
    }

    public function studentProfile($id){
       
        
        /* $rem=Remedials::with('user.AdminStep1')->where('id',$id)
        ->firstOrFail();
        print ($rem); */


        /* $rem=Remedials::with('adminStep1')->where('id',$id)
        ->first(go back to that page); */

        $rem=User::with(['adminStep1', 'remedial'])->where('id',$id)
        ->first();

        // dd($rem) ; // where is that blade?
        //dd($rem);


        /* $rem=Remedials::with('user','AdminStep1')
        ->where('id',$id)
        ->get();
 */
       // return $data;


      

    //    return $rem;

/* 
     $shares = DB::table('directprelim')
    ->join('users', 'users.id', '=', 'directprelim.user_id')
    ->join('AdmissionsStep1', 'AdmissionsStep1.user_id', '=', 'users.id')
    ->where('AdmissionsStep1.user_id', '=', $id)
    ->get(); */

   // return  $shares;




  
        return view('Dashboard/Rem-StudentProfile', compact('rem'));
    }
} // test this ok
