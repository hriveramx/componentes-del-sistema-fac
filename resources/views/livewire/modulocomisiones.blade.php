<div class="table-responsive">
    <table class="table table-light">
        <tr>
            <td class="">Esquema de comisiones</td>
            <td></td>
            <td>Comisión: </td>
            <td colspan="2"><input class="form-control" wire:model="comisionGeneral" type="text" placeholder="">@error('comisionGeneral') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td>Base comisión</td>
            <td>
                <select name="basecomision" id="basecomision" class="form-control" wire:model="basecomision" wire:change="CalcularCantidadComision">
                    <option value="total">Total</option>
                    <option value="subtotal">Subtotal</option>
                </select>
            </td>
            <td>Comisión</td>
            <td><input class="form-control" wire:model="baseComisionPorcentaje" type="text" placeholder="" wire:change="CalcularCantidadComision" >@error('baseComisionPorcentaje') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        </tr>
        <tr>
            <td>% Comisión Gmex</td>
            <td>
                <input class="form-control" wire:model="pocentajeComisionGmex" type="text" placeholder="">
                @error('pocentajeComisionGmex') <p class="text-xs text-red">{{ $message }}</p> @enderror
            </td>


            
                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_1" id="selectComisionBroker_1" class="form-control" wire:model="brokers_1_selectCombo" wire:change="llenadoTablaBrokers">
                        <option value="0"></option>
                        <option value="HB">HB</option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers_1_porcentaje"
                        wire:change="CalcularCantidadComision">

                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                        
                    </select>
                    
                </td>   

                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_2" id="selectComisionBroker_2" class="form-control" wire:model="brokers_2_selectCombo" wire:change="llenadoTablaBrokers">
                        <option value="0"></option>
                        <option value="HB">HB</option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers_2_porcentaje"
                        wire:change="CalcularCantidadComision">

                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                        
                    </select>
                    
                </td>   


                <td rowspan="2" class="text-center" style="vertical-align: middle">
                    <select name="selectComisionBroker_3" id="selectComisionBroker_3" class="form-control" wire:model="brokers_3_selectCombo" wire:change="llenadoTablaBrokers">
                        <option value="0"></option>
                        <option value="HB">HB</option>
                        <option value="MV">MV</option>
                        <option value="MT">MT</option>
                        <option value="PL">PL</option>
                    </select>
                </td>
                <td>
                    <select
                        class="form-control"
                        wire:model="brokers_3_porcentaje"
                        wire:change="CalcularCantidadComision">

                            <option value="0">0%</option>
                            <option value="1">1%</option>
                            <option value="2">2%</option>
                            <option value="3">3%</option>
                            <option value="4">4%</option>
                            <option value="5">5%</option>
                        
                    </select>
                    
                </td> 
                
            
            
        </tr>
        <tr>
            <td>Comisión Gmex</td>
            <td><input class="form-control" wire:model="cantidadComisionGmex" type="text" placeholder="">@error('cantidadComisionGmex') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>

            
                <td><input class="form-control" wire:model="cantidadBroker_1" type="text" placeholder="">@error('cantidadBroker_1') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
                <td><input class="form-control" wire:model="cantidadBroker_2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
                <td><input class="form-control" wire:model="cantidadBroker_3" type="text" placeholder="">@error('cantidadBroker_3') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
 
                
        </tr>
    </table>
    <label for="">Total</label>
    <input type="number" wire:model="CantidadTotal">
    <label for="">Subtotal</label>
    <input type="number" wire:model="CantidadSubtotal">
    <label for="">Cliente</label>
    <input type="text" wire:model="cliente">
    <label for="">Ticket</label>
    <input type="text" wire:model="ticket">
    <label for="">Fecha</label>
    <input type="Date" wire:model="fecha">


<hr>

<table class="table table-light">
    <td>Id Cliente</td>
    <td>Id Ticket</td>
    <td>No Deposito</td>
    <td>Concepto</td>
    <td>Monto</td>
    <td>Fecha</td>

    <tr>
            <td><input class="form-control" wire:model="IdClienteC1" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="IdTicketC1" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="NoDepositoC1" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="ConceptoC1" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="MontoC1" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="Fecha1" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            
    </tr>

    <tr>
        <td><input class="form-control" wire:model="IdClienteC2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketC2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="NoDepositoC2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ConceptoC2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="MontoC2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Fecha2" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        
    </tr>




</table>


<hr>

<table class="table table-light">
    <td>Id Broker</td>
    <td>Id Ticket</td>
    <td>Cliente</td>
    <td>Comision</td>
    <td>Monto</td>
    <td>Fecha</td>
    <tr>
            <td><input class="form-control" wire:model="IdBroker" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="IdTicket" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="ClienteB" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="Comision" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="Monto" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
            <td><input class="form-control" wire:model="FechaB" type="Date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>
    <tr>
        <td><input class="form-control" wire:model="IdBroker2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicket2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteB2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Monto2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaB2" type="Date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>

    <tr>
        <td><input class="form-control" wire:model="IdBroker3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicket3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteB3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Monto3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaB3" type="Date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>

</table>

<hr>

<table class="table table-light">
    <td>ID Grupo</td>
    <td>Id Ticket</td>
    <td>Cliente / CC / Ticket</td>
    <td>Concepto</td>
    <td>Banco Receptor</td>
    <td>Cta Receptora</td>
    <td>Clave de Rastro</td>
    <td>Total</td>
    <td>comision Gmex</td>
    <td>Fecha</td>

    <tr>
        <td><input class="form-control" wire:model="IdGrupo" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketTablaG" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteTablaG" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Concepto" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="BancoReceptop" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="CuentaReceptop" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClaveR" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Total_G" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision_Gmex" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaBG" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>
    
    <tr>
        <td><input class="form-control" wire:model="IdGrupo2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketTablaG2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteTablaG2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Concepto2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="BancoReceptop2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="CuentaReceptop2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClaveR2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Total_G2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision_Gmex2" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaBG2" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>
   
    <tr>
        <td><input class="form-control" wire:model="IdGrupo3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketTablaG3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteTablaG3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Concepto3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="BancoReceptop3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="CuentaReceptop3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClaveR3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Total_G3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision_Gmex3" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaBG3" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>

    <tr>
        <td><input class="form-control" wire:model="IdGrupo4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketTablaG4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteTablaG4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Concepto4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="BancoReceptop4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="CuentaReceptop4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClaveR4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Total_G4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision_Gmex4" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaBG4" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>

    <tr>
        <td><input class="form-control" wire:model="IdGrupo5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketTablaG5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteTablaG5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Concepto5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="BancoReceptop5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="CuentaReceptop5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClaveR5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Total_G5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision_Gmex5" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaBG5" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>

    <tr>
        <td><input class="form-control" wire:model="IdGrupo6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="IdTicketTablaG6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClienteTablaG6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Concepto6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="BancoReceptop6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="CuentaReceptop6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="ClaveR6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Total_G6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="Comision_Gmex6" type="text" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
        <td><input class="form-control" wire:model="FechaBG6" type="date" placeholder="">@error('cantidadBroker_2') <p class="text-xs text-red">{{ $message }}</p> @enderror</td>
    </tr>


</table>





</div>