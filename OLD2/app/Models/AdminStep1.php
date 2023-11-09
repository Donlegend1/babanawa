<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStep1 extends Model
{
    use HasFactory;

    protected $table = 'AdmissionsStep1';

    public function user(){

        return $this->hasOne(User::class, "id", "user_id");
      }
}
