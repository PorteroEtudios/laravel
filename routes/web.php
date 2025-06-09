<?php

use App\Http\Controllers\A20Controller;
use App\Http\Controllers\mostrarArray;
use App\Http\Controllers\SaludoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a20', function () {
    return 'Hello World';
})->name('uu');

Route::get('/a20/saludo', function(){
    return 'hola mundo';
});

Route::get('/a20/saludo/vista', function(){
    return view('saludo');
});
Route::get('/a20/saludo/controller/{nombre}', [SaludoController::class, 'index']);    

Route::get('/a20/verlista', [mostrarArray::class, 'mostrarArray']);
