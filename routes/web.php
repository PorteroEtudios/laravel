<?php

use App\Http\Controllers\porteController;
use App\Http\Controllers\mostrarArray;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/porte', [porteController::class, 'index']);

Route::get('/a20/saludo', function(){
    return 'hola mundo';
});

Route::get('/a20/saludo/vista', function(){
    return view('saludo');
});
Route::get('/a20/saludo/controller/{nombre}', [SaludoController::class, 'index']);

Route::get('/porte/mostrarusuarios', [mostrarArray::class, 'mostrarArray']);

Route::resource('paises', PaisController::class);
