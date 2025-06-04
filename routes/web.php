<?php

use App\Http\Controllers\porteController;
use App\Http\Controllers\mostrarArray;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/porte', function () {
    return 'Hello World';
})->name('uu');

Route::get('/porte/saluda', [porteController::class, 'saluda']);

Route::get('/porte/mostrarusuarios', [mostrarArray::class, 'mostrarArray']);
