<?php

namespace App\Livewire;

use Livewire\Component;

class Modulocomisiones extends Component
{

    public $brokers;
    public $comisionGeneral;
    public $basecomision;
    public $baseComisionPorcentaje;
    public $pocentajeComisionGmex;
    public $cantidadComisionGmex;
    public $cantidadBroker_1;
    public $cantidadBroker_2;
    public $cantidadBroker_3;
    public $cantidadBroker_4;
    public $cantidadBroker_5;
    public $cantidadBroker_6;
    public $cantidadBroker_7;
    public $cantidadBroker_8;
    public $cantidadBroker_9;
    public $cantidadBroker_10;
    
    public $CantidadTotal;
    public $CantidadSubtotal;
    
    public $brokers_1_porcentaje;
    public $brokers_2_porcentaje;
    public $brokers_3_porcentaje;
    
    public function mount()
    {

        $this->comisionGeneral = "0";
        $this->basecomision = "total";
        $this->baseComisionPorcentaje = "5.00%";
        
        $this->CantidadTotal = "3480000";
        $this->CantidadSubtotal = "3000000";

        $this->brokers = [];

        for ($i = 1; $i <= 10; $i++) {
            $this->brokers[$i] = [
                'selectCombo' => $i == 1 ? 'HB' : null,
                'porcentaje' => $i == 1 ? '2' : null,
            ];
        }

       // $this->calcularPorcentajeComisionGmex();

        $this->CalcularCantidadComision();
    }



    public function CalcularCantidadComision(){

        $this->pocentajeComisionGmex = number_format( floatval($this->baseComisionPorcentaje) - floatval($this->brokers_1_porcentaje) - floatval($this->brokers_2_porcentaje) - floatval($this->brokers_3_porcentaje)) . '%';
        
       
        $total = $this->CantidadTotal;
        $subtotal = $this->CantidadSubtotal;
        $porcentaje = floatval($this->baseComisionPorcentaje); 

        

        if( $this->basecomision == "total"){
            $this->comisionGeneral = ($porcentaje * $total)/100;
            $this->cantidadComisionGmex =(floatval($this->pocentajeComisionGmex) * $total)/100;
            $this->cantidadBroker_1 = (floatval($this->brokers_1_porcentaje) * $total)/100;
            $this->cantidadBroker_2 = (floatval($this->brokers_2_porcentaje) * $total)/100;
            $this->cantidadBroker_3 = (floatval($this->brokers_3_porcentaje) * $total)/100;
            
        }else
        {
            $this->comisionGeneral = ($porcentaje * $subtotal)/100;
            $this->cantidadComisionGmex =(floatval($this->pocentajeComisionGmex) * $subtotal)/100;
            $this->cantidadBroker_1 = (floatval($this->brokers_1_porcentaje) * $subtotal)/100;
            $this->cantidadBroker_2 = (floatval($this->brokers_2_porcentaje) * $subtotal)/100;
            $this->cantidadBroker_3 = (floatval($this->brokers_3_porcentaje) * $subtotal)/100;

        }
        

    }


    public function calcularPorcentajeComisionGmex()
    {
        $porcentajeGmex = floatval(str_replace('%', '', $this->baseComisionPorcentaje));

        foreach ($this->brokers as $broker) {
            $porcentajeGmex -= floatval(str_replace('%', '', $broker['porcentaje']));
        }

        $this->pocentajeComisionGmex = number_format($porcentajeGmex, 2) . '%';
    }

    public function render()
    {
        return view('livewire.modulocomisiones');
    }
}
