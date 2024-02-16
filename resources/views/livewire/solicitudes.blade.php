<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h2>Solicitudes</h2>

    <table class="table table-striped table-hover">
        <tr>
            <td>Broker</td>
            <td>Ticket</td>
            <td>Cliente</td>
            <td>Comision</td>
            <td>Monto</td>
            <td>Fecha</td>
        </tr>

        @foreach ($solicitudes as $solicitud)

        <tr>
            <td>{{ $solicitud->broker}}</td>
            <td>{{ $solicitud->ticket}}</td>
            <td>{{ $solicitud->cliente}}</td>
            <td>{{ $solicitud->comision}}</td>
            <td>{{ $solicitud->monto}}</td>
            <td>{{ $solicitud->fecha}}</td>

    
        </tr>
            
        @endforeach
    </table>
</div>
