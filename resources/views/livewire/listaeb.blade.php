
    <br>

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



        <tr>
            <td>EB{{$ticketEB}}</td>
            <td>{{$cliente}}</td>
            <td>{{$empresaEmisoraPre}}</td>
            <td>{{$nivel}}</td>
            <td>{{$grupo}}</td>
            <td>{{$fecha}}</td>
            <td>{{$montoDeposito}}</td>
            <td><input class="form-control" name="comentario" wire:model="comentario" type="text" placeholder=""></td>
            <td></td>
            <td></td>
        </tr>
</table>