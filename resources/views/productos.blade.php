<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

        <div>
            <ul>
                <li><a href="{{ route('welcome') }}">Inicio</a></li>
                <li><a href="{{ route('productos') }}">Productos</a></li>
                <li><a href="{{ route('contacto')}}">Contacto</a></li>
                <li><a href="{{ route('acercaDe')}}">Acerda de</a></li>
            </ul>
        </div>

    <h1>Lista de productos</h1>

    <ul>

        <li>Sandia</li>
        <li>Durazno</li>
        <li>Naranja</li>
        <li>Fresa</li>
        <li>Coco</li>

    </ul>

    <ul>
        <li><a href="{{ route('welcome') }}">Ir a la página de inicio</a></li>
    </ul>


</body>
</html>