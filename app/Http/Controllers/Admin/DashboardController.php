<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Remedials;
use App\Models\User;
use App\Models\Expenses;
use Illuminate\Support\Facades\Log;


use App\Models\Prelims;

use DB;
use App\Models\Message_recipient;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
       
    }


    public function index()
    {
        $query = Payment::all();
        // dd($query);
        $expensesQuery = Expenses::all();
        // dd($expensesQuery);

        $allRem = Remedials::with('user')->get();

        $totalRemmedials =   Remedials::all()->sum('amountPaid');
        $messages =
            Message_recipient::with('message.sender')
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('Dashboard/dashboard', [
            'totalRem' => $totalRemmedials,
            'allrem' => $allRem,
            "messages" => $messages,
            "query"=> $query,
            "expensesQuery"=> $expensesQuery

        ]);
    }
    public function fetchData(Request $request)
    {
        try {
            $startDate = $request->input('start_date', '2023-01-01');
            $endDate = $request->input('end_date', now()->format('Y-m-d'));

            // Log the start_date and end_date
            Log::info('Start Date: ' . $startDate);
            Log::info('End Date: ' . $endDate);

            $query = Payment::whereBetween('created_at', [$startDate, $endDate])->get();
            $expensesQuery = Expenses::whereBetween('created_at', [$startDate, $endDate])->get();
// return  response($expensesQuery);
            $uniqueDates = $query->pluck('created_at')->merge($expensesQuery->pluck('created_at'))->unique()->sort()->values();

            return response()->json([
                'success' => true,
                'data' => [
                    'incomeData' => $query,
                    'expenseData' => $expensesQuery,
                    'uniqueDates' => $uniqueDates,
                ],
            ]);
        } catch (\Exception $e) {
            // Log any exceptions
            Log::error('Error fetching data: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error fetching data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function engineering()
    {

        return view('Dashboard/dashboardEngineering');
    }


    public function certificate()
    {

        return view('Dashboard/Certdashboard');
    }

    public function studentProfile($id)
    {


        /* $rem=Remedials::with('user.AdminStep1')->where('id',$id)
        ->firstOrFail();
        print ($rem); */


        /* $rem=Remedials::with('adminStep1')->where('id',$id)
        ->first(go back to that page); */

        $rem = User::with(['adminStep1', 'remedial'])->where('id', $id)
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