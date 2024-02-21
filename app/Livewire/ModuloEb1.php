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
    public $comentario;
    public $fechaComprobante;
    public $rfc;
    public $empresaEmisoraPre;

    public $baseComisionPorcentaje;
    public $basecomision;
    public $pocentajeComisionGmex;
    public $brokers_1_porcentaje;
    public $brokers_2_porcentaje;
    public $brokers_3_porcentaje;
    public $comisionGeneral;
    public $cantidadComisionGmex;
    public $cantidadBroker_1;
    public $cantidadBroker_2;
    public $cantidadBroker_3;


    public $ticketPre;

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
            'comentarios' => $this->comentario,
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
        $this->comentario = '';
    }

    public function mount()
    {
        $this->montoDeposito =  "17000";
        $this->baseComisionPorcentaje = "5%";
        $this->basecomision = "total";
        $this->empresaEmisora = EmpresaEmisora::first()->id;

        $this->fecha = "2024-02-21";
        $this->fechaComprobante = $this->fecha;

        $this->actualizarDatosEmpresaEmisora();
        $this->CalcularCantidadComision();
    }

    public function actualizarDatosEmpresaEmisora()
    {
        $empresa_emisora = Empresaemisora::find($this->empresaEmisora);
        if($empresa_emisora){
            $this->grupo = $empresa_emisora->grupo;
            $this->nivel = $empresa_emisora->nivel;
            $this->rfc = $empresa_emisora->rfc;
            $this->empresaEmisoraPre = $empresa_emisora->razonsocial;
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

    public function CalcularCantidadComision(){

        $this->pocentajeComisionGmex = floatval($this->baseComisionPorcentaje) - floatval($this->brokers_1_porcentaje) - floatval($this->brokers_2_porcentaje) - floatval($this->brokers_3_porcentaje). '%';
        $monto = $this->montoDeposito;
        $porcentaje = floatval($this->baseComisionPorcentaje); 

        

        if( $this->basecomision == "total"){
            $this->comisionGeneral = ($porcentaje * $monto)/100;
            $this->cantidadComisionGmex = (floatval($this->pocentajeComisionGmex) * $monto)/100;
            $this->cantidadBroker_1 = (floatval($this->brokers_1_porcentaje) * $monto)/100;
            $this->cantidadBroker_2 = (floatval($this->brokers_2_porcentaje) * $monto)/100;
            $this->cantidadBroker_3 = (floatval($this->brokers_3_porcentaje) * $monto)/100;
            
        }else
        {
            $this->comisionGeneral = round((($porcentaje * $monto)/100)/1.16 ,2) ;
            $this->cantidadComisionGmex = round(((floatval($this->pocentajeComisionGmex) * $monto)/100)/1.16 ,2);
            $this->cantidadBroker_1 = round(((floatval($this->brokers_1_porcentaje) * $monto)/100)/1.16 ,2);
            $this->cantidadBroker_2 = round(((floatval($this->brokers_2_porcentaje) * $monto)/100)/1.16 ,2);
            $this->cantidadBroker_3 = round(((floatval($this->brokers_3_porcentaje) * $monto)/100)/1.16 ,2);

        }
    }

    public function PrevisualisacionTabla(){
        
       

    }


    public function render()
    {
        $datos = moduloEB::All();

        $empresasEmisoras = Empresaemisora::orderBy('razonsocial', 'asc')->get();
        return view('livewire.modulo-eb1',compact('datos', 'empresasEmisoras'));
    }
}
