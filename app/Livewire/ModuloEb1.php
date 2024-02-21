<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\moduloEB;
use App\Models\Empresaemisora;
class ModuloEb1 extends Component
{

    public $ticketEB;
    public $cliente;
    public $empresaEmisora;
    public $nivel;
    public $grupo;
    public $fecha;
    public $montoDeposito;
    public $fechaComprobante;

    public function guardarModuloEB()
    {
        $registroEB = moduloEB::create([
            'id_ticket' => $this->ticketEB,
            'id_cliente' => $this->cliente,
            'empresa_emisora_id' => $this->empresaEmisora,
            'id_nivel_emisora' => $this->nivel,
            'id_grupo' => $this->grupo,
            'fecha_solicitud' => $this->fecha,
            'total' => $this->montoDeposito,
            'comprobante_pdf' => $this->fechaComprobante,

        ]); 
        
        if($registroEB){

            $this->resetCampos();
            session()->flash('mensajeSuccess', 'Solicitud de Factura creada exitosamente!');
        } else {
            session()->flash('mensajeError', 'Solicitud de Factura no creada!');
        }  
    }
    
    public function resetCampos()
    {
        $this->ticketEB = '';
        $this->cliente = '';  
    }

    public function mount()
    {
        $this->empresaEmisora = EmpresaEmisora::first()->id;

        $this->actualizarDatosEmpresaEmisora();
    }

    public function actualizarDatosEmpresaEmisora()
    {
        $empresa_emisora = Empresaemisora::find($this->empresaEmisora);
        if($empresa_emisora){
            $this->grupo = $empresa_emisora->grupo;
            $this->nivel = $empresa_emisora->nivel;
        }else{
            // Manejar el caso donde la empresa no se encuentra
            $this->resetCamposEmpresaEmisora();
        }
    }

    private function resetCamposEmpresaEmisora()
    {
        $this->grupo = null;
        $this->nivel = null;
    }

    public function render()
    {
        $datos = moduloEB::All();

        $empresasEmisoras = Empresaemisora::orderBy('razonsocial', 'asc')->get();
        return view('livewire.modulo-eb1',compact('datos', 'empresasEmisoras'));
    }
}
