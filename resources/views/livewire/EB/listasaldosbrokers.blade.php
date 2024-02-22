<div>
    <br>
    <h5 class="text-center">Tabla Saldos Cuentas</h5>
<table class="table mb-0 table-striped table-hover">
    <tr>
        <td>Id Broker</td>
        <td>Id Ticket</td>
        <td>Cliente</td>
        <td>% Comision</td>
        <td>Monto</td>
        <td>Fecha</td> 
    </tr>



    @foreach ($saldosBrokers as $broker)
    <tr>
        <td>{{ $broker->id_broker}}</td>
        <td>{{ $broker->id_ticket}}</td>
        <td>{{ $broker->cliente}}</td>
        <td>{{ $broker->comision}}</td>
        <td>{{ $broker->monto}}</td>
        <td>{{ $broker->fecha}}</td>
    </tr>
@endforeach
</table>
</div>
