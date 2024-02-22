<div>
    <table class="table mb-0 table-striped table-hover">
        <tr>
            <td>Id Ticket</td>
            <td>Id Cliente</td>
            <td>Empresa Emisora</td>
            <td>Id Nivel Empresa</td>
            <td>Id Grupo</td>
            <td>Fecha de Solicitud</td>
            <td>Total</td>
            <td>Comentarios</td>
            <td>Comprobante pdf</td>
            <td>Vlidaciòn pdf</td>   
        </tr>
    
    
        @foreach ($datos as $dato)
            <tr>
                <td>EB{{ $dato->id_ticket}}</td>
                <td>{{ $dato->id_cliente}}</td>
                <td>{{ $dato->empresaEmisora->razonsocial}}</td>
                <td>{{ $dato->id_nivel_emisora}}</td>
                <td>{{ $dato->id_grupo}}</td>
                <td>{{ $dato->fecha_solicitud}}</td>
                <td>{{ $dato->total}}</td>
                <td>{{ $dato->comentarios}}</td>
                <td>{{ $dato->comprobante_pdf}}</td>
                <td>{{ $dato->validacion_pdf}}</td>
            </tr>
        @endforeach
    </table>
</div>
