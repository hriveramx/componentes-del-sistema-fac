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



    @foreach ($saldosClientes as $saldo)
    <tr>
        <td>{{ $saldo->id_cliente}}</td>
        <td>{{ $saldo->id_ticket}}</td>
        <td>{{ $saldo->numero_deposito}}</td>
        <td>{{ $saldo->concepto}}</td>
        <td>{{ $saldo->monto}}</td>
        <td>{{ $saldo->fecha}}</td>
    </tr>
@endforeach
</table>
</div>
