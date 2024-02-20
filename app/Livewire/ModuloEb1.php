<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\moduloEB;
class ModuloEb1 extends Component
{

    public $cliente;
    public $empresaEmisora;
    public function guardar()
    {
        $registroEB = moduloEB::create([
            'id_cliente' => $this->cliente,
            'empresa_emisora' => $this->empresaEmisora,
        ]); 
        
        if($grupoEB){
            session()->flash('mensajeSuccess', 'Solicitud de Factura creada exitosamente!');
        } else {
            session()->flash('mensajeError', 'Solicitud de Factura no creada!');
        }  
    }   

    public function render()
    {
        $datos = moduloEB::All();
        return view('livewire.modulo-eb1',compact('datos'));
    }
}
