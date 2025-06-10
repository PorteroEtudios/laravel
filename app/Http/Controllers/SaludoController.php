<?php

namespace App\Http\Controllers;

class SaludoController extends Controller
{
    //
    public function index($id)
    {
        return view('saludo')
            ->with ("nombre", $id);        
    }
}