<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Practicas\Counter;

use App\Livewire\Practicas\Comisiones;
use App\Livewire\EB\ControlEb1;
use App\Livewire\Practicas\Modulocomisiones;
//use App\Livewire\ModuloEB;
//use App\Livewire\ModuloEb as LivewireModuloEb;
use App\Livewire\EB\ModuloEb1;
use App\Livewire\EB\SaldosClientes;
use App\Livewire\EB\SaldosCuentas;
use App\Livewire\EB\SaldosBrokers;

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

Route::get('/counter', Counter::class);
Route::get('/', ModuloEb1::class);  

Route::get('/productos', function(){
    return view('productos');
})->name('productos'); //Agregue el nombre de la ruta

Route::get('/acercaDe' , function(){
    return view('acercaDe');
})->name('acercaDe'); //Nombre de la ruta
Route::get('/contacto' ,function(){
    return view('contacto');
})->name('contacto'); //nombre de la ruta



//Ruta para el componente de Comisiones 
Route::get('/comisiones', Comisiones::class);

//Ruta para el componente de Modulo de Comisiones
Route::get('/modulocomisiones', Modulocomisiones::class);
Route::get('/moduloEB', ModuloEb1::class);


Route::get('/controlEB', ControlEb1::class)->name('controlEB');
Route::get('/saldosclientes', SaldosClientes::class)->name('saldosclientes');
Route::get('/saldoscuentas', SaldosCuentas::class)->name('saldoscuentas');
Route::get('/saldosbrokers', SaldosBrokers::class)->name('saldosbrokers');

//Route::get('/controlEB', ControlEb1::class)->name('controlEB');
