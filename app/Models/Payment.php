<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    
    public function for()
    {
        return $this->belongsTo(PaidFor::class, 'paid_for_id', 'id');
    }
    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class, 'payment_type_id', 'id');
    }
}