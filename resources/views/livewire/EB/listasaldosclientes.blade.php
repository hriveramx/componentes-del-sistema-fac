<div>
    <br>
    <h5 class="text-center">Tabla Saldos Clientes</h5>
<table class="table mb-0 table-striped table-hover">
    <tr>
        <td>Id Cliente</td>
        <td>Id Ticket</td>
        <td>Numero de deposito</td>
        <td>Concepto</td>
        <td>Monto</td>
        <td>Fecha</td>  
    </tr>



    <tr>
        <td>{{ $clientePre}}</td>
        <td wire:model="ticketEB0">EB{{ $ticketEB}}</td>
        <td><input class="form-control" name="noDeposito" wire:model="noDeposito" type="number" placeholder=""></td>
        <td><input class="form-control" name="concepto" wire:model="concepto" type="text" placeholder=""></td>
        <td>{{$montoDeposito}}</td>
        <td>{{$fechaComprobante}}</td>
    </tr>
    <tr>
        <td>{{ $clientePre}}</td>
        <td>EB{{ $ticketEB}}</td>
        <td><input class="form-control" name="noDeposito2" wire:model="noDeposito2" type="number" placeholder=""></td>
        <td><input class="form-control" name="concepto2" wire:model="concepto2" type="text" placeholder=""></td>
        <td>-{{$comisionGeneral}}</td>
        <td>{{$fechaComprobante}}</td>
    </tr>
</table>
</div>
