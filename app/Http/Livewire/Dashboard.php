<?php

namespace App\Http\Livewire;

use App\Models\Prelims;
use App\Models\Expenses;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\ExpensesType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;





use Livewire\Component;

class Dashboard extends Component
{
    public $selectedPeriod;
    public $loadgraph=false;

    public function render()
    {
       
        
        $query = Prelims::query();

        if ($this->selectedPeriod === 'day') {
            // Filter data for today
            $query->whereDate('prelims.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            // Filter data for one week (7 days) from today
            $query->whereBetween('prelims.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            // Filter data for one month from today
            $query->whereMonth('prelims.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            // Filter data for one year from today
            $query->whereYear('prelims.created_at', now()->year);
        }

        //application expenses
        $expensesQuery = Expenses::query();
        // Apply filters based on selected period for expenses
        if ($this->selectedPeriod === 'day'
        ) {
            $expensesQuery->whereDate('expenses.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $expensesQuery->whereBetween('expenses.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $expensesQuery->whereMonth('expenses.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $expensesQuery->whereYear('expenses.created_at', now()->year);
        }
        $allexpenses= $expensesQuery->with('expenseType')->paginate(10);
        
        // Add condition for expensetype.source == 1
        $expensesQuery->whereHas('expenseType', function ($query) {
            $query->where('source_id', 1)->where("school_id", Auth::user()->school_id);
        });

        // Fetch the expenses with their types
        $expenses = $expensesQuery->with('expenseType')->get();
        // dd($expenses);

        $totalapplication_expense = $expenses->sum("amount");

        //school expenses
        $school_feesexpenses = Expenses::query();
        // Apply filters based on selected period for expenses
        if (
            $this->selectedPeriod === 'day'
        ) {
            $school_feesexpenses->whereDate('expenses.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $school_feesexpenses->whereBetween('expenses.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $school_feesexpenses->whereMonth('expenses.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $school_feesexpenses->whereYear('expenses.created_at', now()->year);
        }

        // Add condition for expensetype.source == 1
        $school_feesexpenses->whereHas('expenseType', function ($query) {
            $query->where('source_id', 2)->where("school_id", Auth::user()->school_id);
        });

        // Fetch the expenses with their types
        $allschool_feesexpenses = $school_feesexpenses->get();
        $totalallschool_feesexpenses = $allschool_feesexpenses->sum("amount");


        //Contribution expenses
        $contributionexpenses = Expenses::query();
        // Apply filters based on selected period for expenses
        if (
            $this->selectedPeriod === 'day'
        ) {
            $contributionexpenses->whereDate('expenses.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $contributionexpenses->whereBetween('expenses.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $contributionexpenses->whereMonth('expenses.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $contributionexpenses->whereYear('expenses.created_at', now()->year);
        }

        // Add condition for expensetype.source == 1
        $contributionexpenses->whereHas('expenseType', function ($query) {
            $query->where('source_id', 3)->where("school_id", Auth::user()->school_id);
        });

        // Fetch the expenses with their types
        $allcontributionexpenses = $contributionexpenses->get();
        $totalallcontributionexpenses = $allcontributionexpenses->sum("amount");

        



        //application fees
        $application_fees = Payment::query()->where('school_id', Auth::user()->school_id);
        // Apply filters based on selected period for expenses
        if ($this->selectedPeriod === 'day') {
            $application_fees->whereDate('payments.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $application_fees->whereBetween('payments.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $application_fees->whereMonth('payments.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $application_fees->whereYear('payments.created_at', now()->year);
        }
        $fees = $application_fees->where('paid_for_id', 1)->get();

        $paymentsdata= $application_fees->with('for', 'paymentType')->where("school_id", Auth::user()->school_id)->paginate(10);
        // dd($paymentsdata);

        $totalapplication_fees= $fees->sum("AmountPaid");


        //school fees 
        $school_fees = Payment::query()->where('school_id', Auth::user()->school_id);
        // Apply filters based on selected period for expenses
        if ($this->selectedPeriod === 'day') {
            $school_fees->whereDate('payments.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $school_fees->whereBetween('payments.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $school_fees->whereMonth('payments.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $school_fees->whereYear('payments.created_at', now()->year);
        }
        $schoolfees = $school_fees->where('paid_for_id', 2)->get();

       


        $totalschool_fees = $schoolfees->sum("AmountPaid");

        //contribution
        $contribution = Payment::query()->where('school_id', Auth::user()->school_id);
        // Apply filters based on selected period for expenses
        if ($this->selectedPeriod === 'day') {
            $contribution->whereDate('payments.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $contribution->whereBetween('payments.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $contribution->whereMonth('payments.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $contribution->whereYear('payments.created_at', now()->year);
        }
        $contributions = $contribution->where('paid_for_id', 3)->get();

       
        $totalcontributions = $contributions->sum("AmountPaid");

        // Log::info('End Date: ' . $totalapplication_fees);



   
      
      

        $totalRemmedials = $query->sum('amount_paid');
        $allRem = $query->get();
        $expensesType = ExpensesType::all();

        return view('livewire.dashboard', [
            'totalRem' => $totalRemmedials,
            'allrem' => $allRem,
            'expenses' => $allexpenses,
            'totalapplication_fees'=> $totalapplication_fees, 
            'totalschool_fees'=> $totalschool_fees,
            'totalcontributions'=> $totalcontributions,
            'totalapplication_expense'=> $totalapplication_expense,
            'totalallschool_feesexpenses' => $totalallschool_feesexpenses,
            'totalallcontributionexpenses' => $totalallcontributionexpenses,
    
            'paymentsdata'=> $paymentsdata,
            'expensesType'=> $expensesType,
            
        ]);
    }
    public function updatedSelectedPeriod($value)
    {
        $this->dispatchBrowserEvent('message', ['updateSelectedPeriod']);
    }

}