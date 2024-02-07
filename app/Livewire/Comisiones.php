<?php

namespace App\Livewire;

use Livewire\Component;

class Comisiones extends Component
{

    public $nombreSistema = "Módulo de Comisiones";

    public $numero1;
    public $numero2; 
    public $resultado;

    public $cantidad;
    public $cantidadTotal; 

    public function multiplicar(){

        $this->resultado = $this->numero1 * $this->numero2;
    }

    public function sumar()
    {
        $this->resultado = $this->numero1 + $this->numero2;
    }

    public function restar(){

        $this->resultado = $this->numero1 - $this->numero2;
    }

    public function calcularTotalIva()
    {
        $this->cantidadTotal = $this->cantidad * 1.16;
    } 
    
    public function render()
    {
        return view('livewire.comisiones');
    }
}

