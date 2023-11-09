<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaidFor extends Model
{
    use HasFactory;
    public function expenseTypes()
    {
        return $this->hasMany(ExpensesType::class, 'source_id');
    }
}