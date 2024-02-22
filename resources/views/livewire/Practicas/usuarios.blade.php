<div>
    <h1>Lista de usuarios</h1>

    <table class="table table-striped table-hover">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Promedio</td>
            <td>email</td>
            
        </tr>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->apellido}}</td>
                <td>{{ $usuario->edad}}</td>
                <td>{{ $usuario->promedio}}</td>
                <td>{{ $usuario->email}}</td>
                
            </tr>
        @endforeach
    </table>
    
    
    
    
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
