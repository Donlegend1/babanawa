<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index($stream, $type)
    {

        //return $stream;
        return view("prelims.registration",[
            'stream' => $stream,
            'type' => $type
        ]);
    }
    
    
    
    
     public function complete()
    {

        //return $stream;
        return view("complete");
    }
}