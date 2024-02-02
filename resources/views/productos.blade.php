<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('welcome')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('productos')}}">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contacto')}}">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('acercaDe')}}">Acerca de</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    

        <div>
            <ul>
                <li><a href="{{ route('welcome') }}">Inicio</a></li>
                <li><a href="{{ route('productos') }}">Productos</a></li>
                <li><a href="{{ route('contacto')}}">Contacto</a></li>
                <li><a href="{{ route('acercaDe')}}">Acerda de</a></li>
            </ul>
        </div>

    <h1>Lista de productos</h1>

    <ul class="list-group">

        <li class="list-group-item active">Frutas</li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Sandia
        <span class="badge bg-primary rounded-pill">500</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Durazno
        <span class="badge bg-primary rounded-pill">150</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Naranja
        <span class="badge bg-primary rounded-pill">354</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Fresa
        <span class="badge bg-primary rounded-fill">413</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Coco
        <span class="badge bg-primary rounded-fill">335</span>
        </li>

    </ul>

    <ul>
        <li><a href="{{ route('welcome') }}">Ir a la página de inicio</a></li>
    </ul>


</body>
</html>