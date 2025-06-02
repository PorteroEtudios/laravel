<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mostrarArray extends Controller
{    
     public function mostrarArray(){
        // Define tu array de personas
        $usuarios = [
            'Teruel',
            'Portero',
            'Godoy',
            'Lobo',
            'Tomi'
        ];

        // Pasa el array a la vista. 'nombres' será la variable accesible en la vista.
        return view('verlista', ['nombres' => $usuarios]);
    }
}
