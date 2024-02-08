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

    public $resultadoL;



    public $subtotal;
    public $total;
    public $porcentaje;
    public $TotalSubtotal;
    public $resultadoComisiones;

    public $porcentajeGTotal;
    public $porcentajeG;
    public $porcentajeG2;
    public $porcentajeG3;
    public $resultadoComisionesGM;
    public $resultadoComisionesGM2;
    public $resultadoComisionesGM3;
    public $resultadoP;



    public function calcularTotalIva()
    {
        //$this->cantidadTotal = $this->cantidad * 1.16;
        $this->cantidadTotal = ($this->cantidad * 116)/100;
    } 

    public function comisiones(){
       
        $this->total = ($this->subtotal * 116)/100;

        $this->porcentajeGTotal = $this->porcentaje - $this->porcentajeG2 - $this->porcentajeG3;
        
    
        
        if( $this->TotalSubtotal == 2){

            $this->resultadoComisiones = ($this->porcentaje * $this->subtotal)/100;

            $this->resultadoComisionesGM = ($this->porcentajeGTotal * $this->subtotal)/100;
            $this->resultadoComisionesGM2 = ($this->porcentajeG2 * $this->subtotal)/100;
            $this->resultadoComisionesGM3 = ($this->porcentajeG3 * $this->subtotal)/100;
            


        }elseif($this->TotalSubtotal == 3){

            $this->resultadoComisiones = ($this->porcentaje * $this->total)/100;

            $this->resultadoComisionesGM = ($this->porcentajeGTotal * $this->total)/100;
            $this->resultadoComisionesGM2 = ($this->porcentajeG2 * $this->total)/100;
            $this->resultadoComisionesGM3 = ($this->porcentajeG3 * $this->total)/100;
        }


    }

    



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

    


    public function sumarLabel(){
        $this->resultadoL =  $this->subtotal + $this->total;

    }
    


    
    public function render()
    {
        return view('livewire.comisiones');
    }
}

