<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    public function expenseType()
    {
        return $this->belongsTo(ExpensesType::class, 'expenses_type_id', 'id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Expenses()
    {
        return $this->belongsTo(Message::class, 'message_id', 'id');
    }
}