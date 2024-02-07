<?php

namespace App\Livewire;

use Livewire\Component;

class Comisiones extends Component
{

    public $nombreSistema = "componentes xxxx";

    public $numero1;
    public $numero2; 
    public $resultado;

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

    
    public function render()
    {
        return view('livewire.comisiones');
    }
}

