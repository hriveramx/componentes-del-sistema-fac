<div>
    
    <h2>Registros</h2>


    <table class="table table-striped table-hover">

        <tr>
            <td>Grupo</td>
            <td>Ticket</td>
            <td>Banco Receptor</td>
            <td>Cliente</td>
            <td>CuentaReceptora</td>
            <td>Calve de Rastreo</td>
            <td>Total</td>
            <td>Fecha</td>
        </tr>

        @foreach ($registros as $registro)

        <tr>
            <td>{{$registro->grupo}}</td>
            <td>{{$registro->ticket}}</td>
            <td>{{$registro->bancoReceptor}}</td>
            <td>{{$registro->cliente}}</td>
            <td>{{$registro->cuentaReceptora}}</td>
            <td>{{$registro->claveRastreo}}</td>
            <td>{{$registro->total}}</td>
            <td>{{$registro->fecha}}</td>
        </tr>
            
        @endforeach
    </table>{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
