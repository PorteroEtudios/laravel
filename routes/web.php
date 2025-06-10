<?php

//use App\Http\Controllers\porteController;
//use App\Http\Controllers\mostrarArray;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Hola');
});

/*Route::get('/porte', [porteController::class, 'index']);

Route::get('/porte/saluda', [porteController::class, 'saluda']);

Route::get('/porte/mostrarusuarios', [mostrarArray::class, 'mostrarArray']);*/
