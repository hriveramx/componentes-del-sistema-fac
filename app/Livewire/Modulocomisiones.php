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

    //**************** */

    public $monto_negativo;
    public $fecha;
    public $cliente;
    public $ticket;

    public $IdBroker;
    public $IdTicket;
    public $ClienteB;
    public $Comision;
    public $Monto;
    public $FechaB;

    public $IdBroker2;
    public $IdTicket2;
    public $ClienteB2;
    public $Comision2;
    public $Monto2;
    public $FechaB2;
    
    public $IdBroker3;
    public $IdTicket3;
    public $ClienteB3;
    public $Comision3;
    public $Monto3;
    public $FechaB3;

    public $brokers_1_selectCombo;
    public $brokers_2_selectCombo;
    public $brokers_3_selectCombo;


    //********* */

    
    public $IdGrupo;
    public $IdTicketTablaG;
    public $ClienteTablaG;
    public $Concepto;
    public $BancoReceptop;
    public $CuentaReceptop;
    public $ClaveR;
    public $Comision_Gmex;
    public $FechaBG;
    public $Total_G;

    public $IdGrupo2;
    public $IdTicketTablaG2;
    public $ClienteTablaG2;
    public $Concepto2;
    public $BancoReceptop2;
    public $CuentaReceptop2;
    public $ClaveR2;
    public $Comision_Gmex2;
    public $FechaBG2;
    public $Total_G2;


    public $IdGrupo3;
    public $IdTicketTablaG3;
    public $ClienteTablaG3;
    public $Concepto3;
    public $BancoReceptop3;
    public $CuentaReceptop3;
    public $ClaveR3;
    public $Comision_Gmex3;
    public $FechaBG3;
    public $Total_G3;

    public $IdGrupo4;
    public $IdTicketTablaG4;
    public $ClienteTablaG4;
    public $Concepto4;
    public $BancoReceptop4;
    public $CuentaReceptop4;
    public $ClaveR4;
    public $Comision_Gmex4;
    public $FechaBG4;
    public $Total_G4;

    public $IdGrupo5;
    public $IdTicketTablaG5;
    public $ClienteTablaG5;
    public $Concepto5;
    public $BancoReceptop5;
    public $CuentaReceptop5;
    public $ClaveR5;
    public $Comision_Gmex5;
    public $FechaBG5;
    public $Total_G5;

    public $IdGrupo6;
    public $IdTicketTablaG6;
    public $ClienteTablaG6;
    public $Concepto6;
    public $BancoReceptop6;
    public $CuentaReceptop6;
    public $ClaveR6;
    public $Comision_Gmex6;
    public $FechaBG6;
    public $Total_G6;


    
    public function mount()
    {

        
        $this->comisionGeneral = "0";
        $this->basecomision = "total";
        $this->brokers_1_selectCombo = "0";
        $this->brokers_2_selectCombo = "0";
        $this->brokers_3_selectCombo = "0";
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

        $this->fecha = "2024-02-14";
        $this->cliente = "HB";
        $this->ticket = "FR1";

        $this->IdGrupo = "Balance";
        $this->IdGrupo3 = "Balance";
        $this->IdGrupo4 = "Balance";
        $this->IdGrupo5 = "Balance";
        $this->IdGrupo6 = "Balance";
        $this->BancoReceptop = "Saldos Clientes";
        $this->BancoReceptop4 = "Saldos Brokers";
        $this->BancoReceptop5 = "Saldos Brokers";
        $this->BancoReceptop6 = "Saldos Brokers";
        $this->ClaveR4 = "Broker";
        $this->ClaveR5 = "Broker";
        $this->ClaveR6 = "Broker";


        $this->ClaveR = "Cliente";
        $this->IdGrupo2 = "QMEX";
        $this->BancoReceptop2 =  "BBVA BANCOMER";
        $this->CuentaReceptop2 ="012180001208795095";
        $this->ClaveR2 = "85901865320331400";

        $this->BancoReceptop3 = "INGRESOS";
        $this->CuentaReceptop3 = "Comisiones";
        $this->ClaveR3 = "NA";

       // $this->calcularPorcentajeComisionGmex();

        $this->CalcularCantidadComision();
        $this->llenadoTablaBrokers();
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
            $this->monto_negativo = (floatval($this->pocentajeComisionGmex) * -$total)/100;
            
        }else
        {
            $this->comisionGeneral = ($porcentaje * $subtotal)/100;
            $this->cantidadComisionGmex =(floatval($this->pocentajeComisionGmex) * $subtotal)/100;
            $this->cantidadBroker_1 = (floatval($this->brokers_1_porcentaje) * $subtotal)/100;
            $this->cantidadBroker_2 = (floatval($this->brokers_2_porcentaje) * $subtotal)/100;
            $this->cantidadBroker_3 = (floatval($this->brokers_3_porcentaje) * $subtotal)/100;
            $this->monto_negativo = (($total/1.16) * -floatval($this->pocentajeComisionGmex))/100;
            //$this->monto_negativo = (floatval($total)/1.16) * -$this->pocentajeComisionGmex/100;

        }
        

        $this->llenadoTablaBrokers();
        $this->llenadoTablaG();

    }


        //TABLA BROKERS
        public function llenadoTablaBrokers(){


            if($this->brokers_1_selectCombo == "0"){

                $this->IdBroker = "";
            $this->IdTicket = "";
            $this->ClienteB = "";
            $this->Comision = "";
            $this->Monto = "";
            $this->FechaB = "";

            }else{
                $this->IdBroker = $this->brokers_1_selectCombo;
                $this->IdTicket = $this->ticket;
                $this->ClienteB = $this->cliente;
                $this->Comision = $this->brokers_1_porcentaje ."%";
                $this->Monto = $this->cantidadBroker_1;
                $this->FechaB = $this->fecha;


            }

            if($this->brokers_2_selectCombo == "0"){

                $this->IdBroker2 = "";
            $this->IdTicket2 = "";
            $this->ClienteB2 = "";
            $this->Comision2 = "";
            $this->Monto2 = "";
            $this->FechaB2 = "";

            }else{
                $this->IdBroker2 = $this->brokers_2_selectCombo;
                $this->IdTicket2 = $this->ticket;
                $this->ClienteB2 = $this->cliente;
                $this->Comision2 = $this->brokers_2_porcentaje . '%';
                $this->Monto2 = $this->cantidadBroker_2;
                $this->FechaB2 = $this->fecha;


            }

            if($this->brokers_3_selectCombo == "0"){

                $this->IdBroker3 = "";
            $this->IdTicket3 = "";
            $this->ClienteB3 = "";
            $this->Comision3 = "";
            $this->Monto3 = "";
            $this->FechaB3 = "";

            }else{
                $this->IdBroker3 = $this->brokers_3_selectCombo;
                $this->IdTicket3 = $this->ticket;
                $this->ClienteB3 = $this->cliente;
                $this->Comision3 = $this->brokers_3_porcentaje . '%';
                $this->Monto3 = $this->cantidadBroker_3;
                $this->FechaB3 = $this->fecha;


            }

            $this->llenadoTablaG();


        }

        public function llenadoTablaG(){


            $this->IdTicketTablaG = $this->ticket;
            $this->ClienteTablaG = $this->cliente;
            $this->CuentaReceptop = 'CLIENTE: ' . $this->cliente;
            $this->FechaBG = $this->fecha;
            

            $this->IdTicketTablaG2 = $this->ticket;
            $this->ClienteTablaG2 = $this->cliente;
            $this->Concepto2 = $this->IdTicketTablaG2 . $this->IdGrupo2 ;
            $this->Concepto = $this->Concepto2;
            $this->Total_G2 = $this->CantidadTotal;
            $this->Comision_Gmex2 =$this->cantidadComisionGmex;
            $this->FechaBG2 = $this->fecha;

            $this->IdTicketTablaG3 = $this->IdTicketTablaG2;
            $this->ClienteTablaG3 = $this->ClienteTablaG2;
            $this->Concepto3 = $this->Concepto2;
            $this->Total_G3 = -$this->cantidadComisionGmex;
            $this->FechaBG3 = $this->fecha;

            $this->IdTicketTablaG4 = $this->IdTicketTablaG2;
            $this->ClienteTablaG4 = $this->ClienteTablaG2;
            $this->Concepto4 = $this->Concepto2;
            $this->FechaBG4 = $this->fecha;

            $this->IdTicketTablaG5 = $this->IdTicketTablaG4;
            $this->ClienteTablaG5 = $this->ClienteTablaG4;
            $this->Concepto5 = $this->Concepto4;
            $this->FechaBG5 = $this->fecha;

            $this->IdTicketTablaG6 = $this->IdTicketTablaG5;
            $this->ClienteTablaG6 = $this->ClienteTablaG5;
            $this->Concepto6 = $this->Concepto5;
            $this->FechaBG6 = $this->fecha;



            $this->CuentaReceptop4 = 'Broker: ' . $this->brokers_1_selectCombo;
            $this->CuentaReceptop5 = 'Broker: ' . $this->brokers_2_selectCombo;
            $this->CuentaReceptop6 = 'Broker: ' . $this->brokers_3_selectCombo;

            $this->Total_G4 = null;
            $this->Total_G5 = null;
            $this->Total_G6 = null;
            
            if($this->IdBroker != null){

                $this->Total_G4 = -$this->Monto;
            }

            if($this->IdBroker2 != null){

                $this->Total_G5 = -$this->Monto2;
            }

            if($this->IdBroker3 != null){

                $this->Total_G6 = -$this->Monto3;
            }
            


            $this->Total_G = (-$this->Total_G2)-($this->Total_G3 + $this->Total_G4 + $this->Total_G5 + $this->Total_G6);
            //$this->Total_G4 = -$this->Monto;














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
