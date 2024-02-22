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



    @foreach ($saldosCuentas as $cuentas)
    <tr>
        <td>{{ $cuentas->id_grupo}}</td>
        <td>{{ $cuentas->id_ticket}}</td>
        <td>{{ $cuentas->cliente_cc_ticket}}</td>
        <td>{{ $cuentas->concepto}}</td>
        <td>{{ $cuentas->banco}}</td>
        <td>{{ $cuentas->cuenta}}</td>
        <td>{{ $cuentas->clave_rastreo}}</td>
        <td>{{ $cuentas->total}}</td>
        <td>{{ $cuentas->comision_gmex}}</td>
        <td>{{ $cuentas->fecha}}</td>
    </tr>
@endforeach
</table>
</div>
