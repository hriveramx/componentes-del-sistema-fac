<div>
    <br>
    <h5 class="text-center">Tabla Saldos Cuentas</h5>
<table class="table mb-0 table-striped table-hover">
    <tr>
        <td>Id Grupo</td>
        <td>Id Ticket</td>
        <td>Cliente / cc / ticket</td>
        <td>Concepto</td>
        <td>Banco</td>
        <td>Cuenta</td>  
        <td>Clave de Rastreo</td>  
        <td>Total</td>  
        <td>Comisión GMEX</td>  
        <td>Fecha</td>  
    </tr>




    <tr>
        <td>{{$grupo}}</td>
        <td>EB{{$ticketEB}}</td>
        <td>{{$clientePre}}</td>
        <td>EB{{$ticketEB}}{{$grupo}}</td>
        <td>{{$bancoReceptorMostrar}}</td>
        <td>{{$cuentaReceptora}}</td>
        <td><input class="form-control" name="claveRastreo" wire:model="claveRastreo" type="number" placeholder=""></td>
        <td>{{$montoDeposito}}</td>
        <td>{{$cantidadComisionGmex}}</td>
        <td>{{$fechaComprobante}}</td>
    </tr>
</table>
</div>
