<?php

use App\Http\Controllers\A20Controller;
use App\Http\Controllers\mostrarArray;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a20', function () {
    return 'Hello World';
})->name('uu');

Route::get('/a20/saluda', [A20Controller::class, 'saluda']);

Route::get('/a20/verlista', [mostrarArray::class, 'mostrarArray']);
