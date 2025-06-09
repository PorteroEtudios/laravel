<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;

class porteController extends Controller
{
    //
    public function saludo(){
        return view('saludo');
    }
    
    public function index(){
        return redirect()->route('uu');
    }    
}
