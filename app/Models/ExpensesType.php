<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesType extends Model
{
    protected $table = 'expense_types';
    public function expenses()
    {
        return $this->hasMany('App\Expense', 'expensestype_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function source()
    {
        return $this->belongsTo(PaidFor::class, 'source_id');
    }
}