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

  <nav class="navbar navbar-expand-sm bg-primary justify-content-center navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Opcion 1</a></li>
              <li><a class="dropdown-item" href="#">Opcion 2</a></li>
              <li><a class="dropdown-item" href="#">Opcion 3</a></li>
            </ul>
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

    <h1>ACERCA DE</h1>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora sunt in amet fugit deserunt nihil accusamus vel perferendis porro animi consequuntur molestiae hic quidem sed reiciendis maxime, vero obcaecati cupiditate.</p>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Parrafo 1</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quo ipsa, id explicabo ratione distinctio! Ea ipsa aliquid neque expedita voluptas exercitationem? Odio obcaecati vel, non saepe praesentium et a.</p>
                <img src="https://images.pexels.com/photos/327533/pexels-photo-327533.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Imagen de ejemplo" width="400" height="250">
            </div>
            <div class="col-sm-4">
                <h4>Parrafo 2</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil animi adipisci excepturi sint aspernatur pariatur sunt. Veniam excepturi sit nisi. Nemo itaque doloribus culpa reprehenderit rem, quod fugit debitis molestiae?</p>
                <img src="https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Imagen de ejemplo" width="400" height="250">
            </div>
            <div class="col-sm-4">
                <h4>Parrafo 3</h4>
                <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati maxime deserunt reprehenderit enim corporis quis neque temporibus similique voluptatibus. Cupiditate, dolorem magni nihil eveniet iure cumque ducimus dicta recusandae perspiciatis.</p>
                <img src="https://images.pexels.com/photos/4467734/pexels-photo-4467734.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Imagen de ejemplo" width="400" height="250">
            </div>

        </div>

    </div>
    <footer class="footer ">
      <div class="container-fluid bg-primary">
          <div class="row">

              <div class="col-12  pl-5 pr-5" >
                  <div class="ml-5 mr-5 pr-3 pl-4">
                    <hr bg-dark>
                  </div>

                  <div class="row text-white text-center mx-auto">
                      <div class="col-lg-4 col-md-12">
                          <p>Redes Sociales</p>
                      </div>
                      <div class="col-lg-4 col-md-12" >
                          <p>Ejemplo footer</p>
                      </div>
                      <div class="col-lg-4 col-md-12">
                          <p>2024</p>
                      </div>
                  </div>

              </div>

          </div>
      </div>
  </footer>
</body>
</html>