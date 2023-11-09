<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedials extends Model
{
    use HasFactory;

    protected $table = 'directprelim';

    public function user(){

        return $this->hasOne(User::class, "id", "user_id");
      }

      public function adminstep1(){

        return $this->hasOne(AdminStep1::class, "user_id", "id");
      }
}
