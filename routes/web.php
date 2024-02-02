<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); //Agregue el nombre de la ruta

Route::get('/productos', function(){
    return view('productos');
})->name('productos'); //Agregue el nombre de la ruta
Route::get('/acercaDe' , function(){
    return view('acercaDe');
})->name('acercaDe'); //Nombre de la ruta
Route::get('/contacto' ,function(){
    return view('contacto');
})->name('contacto'); //nombre de la ruta
