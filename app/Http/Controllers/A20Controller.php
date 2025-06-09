<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;

class A20Controller extends Controller
{
    //
    public function saludo(){
        return view('saludo');
    }

    public function index(){
        return redirect()->route('uu');
    }    
}
