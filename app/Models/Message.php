<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function sender()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function recipients()
    {
        return $this->hasMany(Message_recipient::class, 'message_id', 'id');
    }

    public function expenses()
    {
        return $this->hasMany(Expenses::class, 'message_id', 'id');
    }
}