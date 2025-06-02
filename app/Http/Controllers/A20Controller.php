<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;

class A20Controller extends Controller
{
    //
    public function saluda(){
        return ("hola a20");
    }

    public function index(){
        return redirect()->route('uu');
    }    
}
