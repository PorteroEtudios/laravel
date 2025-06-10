<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RedisTagSet;
use Illuminate\Http\Request;

class porteController extends Controller
{
    //
    public function saluda(){
        return ("hola porte");
    }

    public function index(){
        return "hOLA";
    }    
}
