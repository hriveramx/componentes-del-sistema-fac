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
            <li><a href="{{ route('welcome')}}">Inicio</a></li>
            <li><a href="{{ route('productos')}}">Productos</a></li>
            <li><a href="{{ route('contacto')}}">Contacto</a></li>
            <li><a href="{{ route('acercaDe')}}">Acerca de</a></li>
        </ul>

    </div>

    <h1>CONTACTO</h1>


    
    <div>
        <ul>
            <li><a href="#">123 456 78 90</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">contacto@contacto.com</a></li>
        </ul>
    </div>


    <form action="#">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="name" class="form-control" placeholder="Ingrese su nombre" id="name" required>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" placeholder="Ingrese su correo electronico" id="email" required>
            </div>
            <div class="mb-3">
                <label for="Textarea1" class="form-label">Comentarios</label>
                <textarea class="form-control" id="TextArea" rows="3" placeholder="Ingrese algun comantario"></textarea>
              </div>
              <div class="form-check form-switch">
                <input class="form-checkbox-input" type="checkbox" role="switch" id="checbox" checked>
                <label class="form-check-label" for="checkboxLable">¿Desea recibir notificaciones?</label>
              </div>


        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>



</body>
</html>