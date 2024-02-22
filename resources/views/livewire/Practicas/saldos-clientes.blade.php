<div>
    <h2>Saldos Clientes</h2>

    <table class="table table-striped table-hover">
        <tr>
            <td>Cliente</td>
            <td>Ticket</td>
            <td>Numero de deposito</td>
            <td>Concepto</td>
            <td>Monto</td>
            <td>Fecha</td>
        </tr>

        @foreach ($saldosC as $saldos)

        <tr>
            <td>{{ $saldos->cliente}}</td>
            <td>{{ $saldos->ticket}}</td>
            <td>{{ $saldos->numeroDeposito}}</td>
            <td>{{ $saldos->concepto}}</td>
            <td>{{ $saldos->monto}}</td>
            <td>{{ $saldos->fecha}}</td>
        </tr>
            
        @endforeach

    </table>{{-- Success is as dangerous as failure. --}}
</div>
