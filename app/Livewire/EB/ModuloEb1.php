<?php

namespace App\Livewire\EB;

use Livewire\Component;
use App\Models\moduloEB;
use App\Models\Empresaemisora;
use App\Models\Banco;
use App\Models\Broker;
use App\Models\Cliente;
use App\Models\Registro;
use App\Models\SaldosBroker;
use App\Models\SaldosCliente;
use App\Models\SaldosCtas;

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
    public $bancoReceptorMostrar;
    public $bancoReceptor;
    public $clientePre;

    public $noDeposito;
    public $noDeposito2;
    public $concepto;
    public $concepto2;
    public $ticketEB0;
    public $cuentaReceptora;
    public $ticketconcatenado;
    public $claveRastreo;

    public $idBroker1;
    public $idTicketBroker1;
    public $clienteBroker1;
    public $comisionBroker1;
    public $montoBroker1;
    public $fechaBroker1;

    public $idBroker2;
    public $idTicketBroker2;
    public $clienteBroker2;
    public $comisionBroker2;
    public $montoBroker2;
    public $fechaBroker2;

    public $idBroker3;
    public $idTicketBroker3;
    public $clienteBroker3;
    public $comisionBroker3;
    public $montoBroker3;
    public $fechaBroker3;
    

    public $brokers_1_selectCombo;
    public $brokers_2_selectCombo;
    public $brokers_3_selectCombo;
    public $idBroker1Mostrar;
    public $idBroker2Mostrar;
    public $idBroker3Mostrar;



    public $ticketPre;

    public function guardarModuloEB()
    {
        $registroEB = moduloEB::create([
            'id_ticket' => "EB".$this->ticketEB,
            'id_cliente' => $this->clientePre,
            'empresa_emisora_id' => $this->empresaEmisora,
            'id_nivel_emisora' => $this->nivel,
            'id_grupo' => $this->grupo,
            'fecha_solicitud' => $this->fecha,
            'total' => $this->montoDeposito,
            'comentarios' => $this->comentario,
        ]); 

        $registroSC = SaldosCliente::create([
            'id_cliente' => $this->clientePre,
            'id_ticket' => "EB".$this->ticketEB,
            'numero_deposito' => $this->noDeposito,
            'concepto' => $this->concepto,
            'monto' => $this->montoDeposito,
            'fecha' => $this->fechaComprobante,

        ]);

        $registroSC2 = SaldosCliente::create([
            'id_cliente' => $this->clientePre,
            'id_ticket' => "EB".$this->ticketEB,
            'numero_deposito' => $this->noDeposito2,
            'concepto' => $this->concepto2,
            'monto' => -$this->comisionGeneral,
            'fecha' => $this->fechaComprobante,

        ]);

        $resgistroSCt = SaldosCtas::create([
            'id_grupo' => $this->grupo,
            'id_ticket' => "EB".$this->ticketEB,
            'cliente_cc_ticket' => $this->clientePre,
            'concepto' => "EB".$this->ticketEB.$this->grupo,
            'banco' => $this->bancoReceptorMostrar,
            'cuenta' => $this->cuentaReceptora,
            'clave_rastreo' => $this->claveRastreo,
            'total' => $this->montoDeposito,
            'comision_gmex' => $this->cantidadComisionGmex,
            'fecha' => $this->fechaComprobante,

        ]);

        if($this->brokers_1_porcentaje != 0){

            SaldosBroker::create([
                'id_broker' => $this->idBroker1,
                'id_ticket' => $this->idTicketBroker1,
                'cliente' => $this->clienteBroker1,
                'comision' => floatval($this->comisionBroker1),
                'monto' => $this->montoBroker1,
                'fecha' => $this->fecha,
            ]);
        }
        if($this->brokers_2_porcentaje != 0){

            SaldosBroker::create([
                'id_broker' => $this->idBroker2,
                'id_ticket' => $this->idTicketBroker2,
                'cliente' => $this->clienteBroker2,
                'comision' => floatval($this->comisionBroker1),
                'monto' => $this->montoBroker2,
                'fecha' => $this->fecha,
            ]);
        }
        if($this->brokers_3_porcentaje != 0){

            SaldosBroker::create([
                'id_broker' => $this->idBroker3,
                'id_ticket' => $this->idTicketBroker3,
                'cliente' => $this->clienteBroker3,
                'comision' => floatval($this->comisionBroker3),
                'monto' => $this->montoBroker3,
                'fecha' => $this->fecha,
            ]);
        }

        
        if($registroEB && $registroSC && $registroSC2 && $resgistroSCt){

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
        $this->cuentaReceptora = '';
        $this->noDeposito = '';
        $this->concepto = '';
        $this->noDeposito2 = '';
        $this->concepto2 = '';
        $this->claveRastreo = '';
        $this->brokers_1_porcentaje = 0;
        $this->brokers_2_porcentaje = 0;
        $this->brokers_3_porcentaje = 0;
        $this->cantidadBroker_1 = 0;
        $this->cantidadBroker_2 = 0;
        $this->cantidadBroker_3 = 0;
        $this->idBroker1 = "";
        $this->idTicketBroker1 = "";
        $this->clienteBroker1 = "";
        $this->montoBroker1 = "";
        $this->fechaBroker1 = "";
        $this->comisionBroker1 = "";
        $this->idBroker2 = "";
        $this->idTicketBroker2 = "";
        $this->clienteBroker2 = "";
        $this->comisionBroker2 = "";
        $this->montoBroker2 = "";
        $this->fechaBroker2 = "";
        $this->idTicketBroker3 = "";
        $this->clienteBroker3 = "";
        $this->comisionBroker3 = "";
        $this->montoBroker3 = "";
        $this->fechaBroker3 = "";
        $this->idBroker3 = "";
        $this->brokers_1_selectCombo = '';
        $this->brokers_2_selectCombo = '';
        $this->brokers_3_selectCombo = '';


        
    }

    public function mount()
    {
        $this->idBroker1 = "prueba";
        $this->montoDeposito =  "17000";
        $this->baseComisionPorcentaje = "5%";
        $this->basecomision = "total";
        $this->empresaEmisora = EmpresaEmisora::first()->id;
        $this->cliente = Cliente::first()->id;
        $this->bancoReceptor = Banco::first()->id;

        $this->brokers_1_selectCombo = Broker::first()->id;
        $this->brokers_2_selectCombo = Broker::first()->id;
        $this->brokers_3_selectCombo = Broker::first()->id;

        $this->fecha = "2024-02-21";
        $this->fechaComprobante = $this->fecha;

        $this->actualizarDatosEmpresaEmisora();
        $this->CalcularCantidadComision();
        $this->actualizarDatosCliente();
        $this->actualizarDatosBanco();
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

        $this->llenadoTablaBrokers();

    }

    public function actualizarDatosCliente(){

        $clienteEB = Cliente::find($this->cliente);
        if($clienteEB){
            $this->clientePre = $clienteEB->cliente;

        }

    }

    public function actualizarDatosBanco()
    {
        $banco = Banco::find($this->bancoReceptor);
        if($banco){
            $this->bancoReceptorMostrar = $banco->abreviado;
        }else{
            // Manejar el caso donde la empresa no se encuentra
            //$this->resetCamposEmpresaEmisora();
        }
    }

    public function actualizarDatosBrokers(){
        $broker1 = Broker::find($this->brokers_1_selectCombo);
        $broker2 = Broker::find($this->brokers_2_selectCombo);
        $broker3 = Broker::find($this->brokers_3_selectCombo);
        if($broker1 && $broker2 && $broker3){
            $this->idBroker1Mostrar = $broker1->broker;
            $this->idBroker2Mostrar = $broker2->broker;
            $this->idBroker3Mostrar = $broker3->broker;
        }

    }

    

    private function resetCamposEmpresaEmisora()
    {
        $this->grupo = null;
        $this->nivel = null;
    }

    public function CalcularCantidadComision(){

        $this->fechaComprobante = $this->fecha;
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

        $this->llenadoTablaBrokers();
        
    }

    public function llenadoTablaBrokers(){

        $this->actualizarDatosBrokers();

        
        if($this->brokers_1_porcentaje == 0){

            $this->idBroker1 = "";
            $this->idTicketBroker1 = "";
            $this->clienteBroker1 = "";
            $this->comisionBroker1 = "";
            $this->montoBroker1 = "";
            $this->fechaBroker1 = "";
     
        }else{
            $this->idBroker1 = $this->idBroker1Mostrar;
            $this->idTicketBroker1 = "EB".$this->ticketEB;
            $this->clienteBroker1 = $this->clientePre;
            $this->comisionBroker1 = $this->brokers_1_porcentaje."%";
            $this->montoBroker1 = $this->cantidadBroker_1;
            $this->fechaBroker1 = $this->fechaComprobante;
        }

        if($this->brokers_2_porcentaje == 0){
            
            $this->idBroker2 = "";
            $this->idTicketBroker2 = "";
            $this->clienteBroker2 = "";
            $this->comisionBroker2 = "";
            $this->montoBroker2 = "";
            $this->fechaBroker2 = "";
     
        }else{
            $this->idBroker2 = $this->idBroker2Mostrar;
            $this->idTicketBroker2 = "EB".$this->ticketEB;
            $this->clienteBroker2 = $this->clientePre;
            $this->comisionBroker2 = $this->brokers_2_porcentaje."%";
            $this->montoBroker2 = $this->cantidadBroker_2;
            $this->fechaBroker2 = $this->fechaComprobante;
        }
        if($this->brokers_3_porcentaje == 0){
            
            $this->idBroker3 = "";
            $this->idTicketBroker3 = "";
            $this->clienteBroker3 = "";
            $this->comisionBroker3 = "";
            $this->montoBroker3 = "";
            $this->fechaBroker3 = "";
     
        }else{
            $this->idBroker3 = $this->idBroker3Mostrar;
            $this->idTicketBroker3 = "EB".$this->ticketEB;
            $this->clienteBroker3 = $this->clientePre;
            $this->comisionBroker3 = $this->brokers_3_porcentaje."%";
            $this->montoBroker3 = $this->cantidadBroker_3;
            $this->fechaBroker3 = $this->fechaComprobante;
        }

    }

    


    public function render()
    {
        $datos = moduloEB::All();
        $bancos = Banco::All();
        $clientes = Cliente::All();
        $empresasEmisoras = Empresaemisora::orderBy('razonsocial', 'asc')->get();
        $saldosClientes = SaldosCliente::All();
        $saldosCuentas = SaldosCtas::All();
        $saldosBrokers = SaldosBroker::All();
        $brokers = Broker::All();
        return view('livewire.EB.modulo-eb1',compact('datos', 'empresasEmisoras','bancos','clientes','saldosClientes','saldosCuentas','saldosBrokers','brokers'));
    }
}
