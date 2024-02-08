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
    
    public function mount()
    {

        $this->comisionGeneral = "210,000.00";
        $this->basecomision = "total";
        $this->baseComisionPorcentaje = "5.00%";
        $this->pocentajeComisionGmex = "3.00%";
        $this->cantidadComisionGmex = "126,000.00";
        $this->cantidadBroker_1 = "84,000.00";

        $this->brokers = [];

        for ($i = 1; $i <= 10; $i++) {
            $this->brokers[$i] = [
                'selectCombo' => $i == 1 ? 'HB' : null,
                'porcentaje' => $i == 1 ? '2' : null,
            ];
        }

        $this->calcularPorcentajeComisionGmex();
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
