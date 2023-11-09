<?php

namespace App\Http\Livewire;

use App\Models\Prelims;
use App\Models\Expenses;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\ExpensesType;


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

        // Fetch expenses based on the selected period
        $expensesQuery = Expenses::query();
        // Apply filters based on selected period for expenses
        if ($this->selectedPeriod === 'day') {
            $expensesQuery->whereDate('expenses.created_at', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $expensesQuery->whereBetween('expenses.created_at', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $expensesQuery->whereMonth('expenses.created_at', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $expensesQuery->whereYear('expenses.created_at', now()->year);
        }


        // Fetch expenses based on the selected period
        //$payments = Payment::query();
        $payments = Payment::query()->where("paid_for_id", 1);
        // Apply filters based on selected period for expenses
        if ($this->selectedPeriod === 'day') {
            $payments->whereDate('payments.date', now()->toDateString());
        } elseif ($this->selectedPeriod === 'week') {
            $payments->whereBetween('payments.date', [now()->subDays(6)->toDateString(), now()->toDateString()]);
        } elseif ($this->selectedPeriod === 'month') {
            $payments->whereMonth('payments.date', now()->month);
        } elseif ($this->selectedPeriod === 'year') {
            $payments->whereYear('payments.date', now()->year);
        }

        $paymentsdata= $payments->paginate(10);
        $Totalsum = $payments->get();

       

       $totalIncome= $Totalsum->sum("AmountPaid");


       $expenses = $expensesQuery
        ->join('expense_types', 'expenses.expenses_type_id', '=', 'expense_types.id')
        ->select('expenses.*', 'expense_types.name as expense_type_name', 'expenses.description as description', 'expense_types.sort_code as sort_code')
        ->paginate(10);
        $Totalexpenses = $expensesQuery
        ->get();

        $sumexpen= $Totalexpenses->sum("amount");
        // Collect dates from both expenses and payments and sort them chronologically
        $dates = [];
        foreach ($expenses as $expense) {
            $dates[] = Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY');
        }
        foreach ($paymentsdata as $payment) {
            $dates[] = Carbon::parse($payment->date)->isoFormat('Do MMMM YYYY');
        }
        sort($dates);

        // Construct the $data variable with corresponding expenses and payments for each date
        $data = "";
        foreach ($dates as $date) {
            $expenseAmount = 0;
            foreach ($expenses as $expense) {
                if (Carbon::parse($expense->created_at)->isoFormat('Do MMMM YYYY') === $date) {
                    $expenseAmount += $expense->amount;
                }
            }
            $paymentAmount = 0;
            foreach ($paymentsdata as $payment) {
                if (Carbon::parse($payment->date)->isoFormat('Do MMMM YYYY') === $date) {
                    $paymentAmount += $payment->AmountPaid;
                }
            }
            $data .= "['" . $date . "', " . $paymentAmount  . ", " . $expenseAmount . "],";
        }

        // Remove the trailing comma
       
      

        $totalRemmedials = $query->sum('amount_paid');
        $allRem = $query->get();
        $expensesType = ExpensesType::all();

        return view('livewire.dashboard', [
            'totalRem' => $totalRemmedials,
            'allrem' => $allRem,
            'expenses' => $expenses,
            'totalIncome'=> $totalIncome,
            'data' => $data,
            'paymentsdata'=> $paymentsdata,
            'sumexpen'=> $sumexpen,
            'expensesType'=> $expensesType
            
        ]);
    }
    public function updatedSelectedPeriod($value)
    {
        $this->dispatchBrowserEvent('message', ['updateSelectedPeriod']);
    }

}