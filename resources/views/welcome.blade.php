<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
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



    <h1>COMPONENTES DEL SISTEMA</h1>
    <hr>
    <!--Comentario en HTML -->
    <p id="parrafo1">Lorem, ipsum dolor sit amet consectetur adipisicing <br>
        elit. Doloribus asperiores dolorem non, eveniet vero odio  <br> 
        voluptates temporibus accusamus, <a href="#">possimus sed</a> possimus sed tempora pariatur, <br>
         nam ea repellendus perferendis! Deserunt ratione eligendi ad.</p>

         <ul>
            <li><a href="{{route('productos')}}" id="prodcuto">Ir a la sección de Productos</a></li>
         </ul>
         

        <h2>Formularios</h2>

        <form action="#"  method="#">
            <label for="Name">Nombre</label>
            <input type="Nombre" id="Name" class="form-control" required>
            <br>
            <label for="Last name" >Apellido</label>
            <input type="Apellido" id="LastName" class="form-control" required>
            <br>
            <label for="age">Edad</label>
            <input type="number" name="Edad" id="edad" min="0" max="150" step="10" class="form-control">
            <br>
            <label for="birthdate">Fecha de nacimiento</label>
            <input type="date" name="nacimiendo" id="FechaNacimiento" class="form-control">
            <br>
            <label for="genero">Genero</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Seleccióne su genero</option>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
              </select>
            <label for="Email">Correo</label>
            <input type="email" id="Email"class="form-control" placeholder="name@example.com">
            <br>
            <label for="password">Contraseña</label>
            <input type="password" id="passw" class="form-control" required>
            
            <br>
            

            


         <label for="boton">Boton</label>
         <button  type="submit" class="btn btn-success">Enviar</button>
         <button  type="reset" class="">Limpiar</button>
        </form>
         <hr>
        <h3>Listas</h3>
         <ul>
             <li>Elemento 1</li>
             <li>Elemento 2</li>
             <li>Elemento 3</li>
             <li>Elemento 4</li>


         </ul>

         <textarea name="comentarios" id="Text" cols="30" rows="10"></textarea>
         <br>

         <img src="https://desarrolloweb.com/storage/manual_images/WWIe25guH9aTMSYX75ZSzBmcLJXBqoWnVklpatud.jpg" alt="imagen de Laravel" width="300" height="300" class="mx-auto d-block rounded">

        <h4>Tablas</h4>

    <div>
        <table class="table">
            <tr>
                <th>Persona</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <tr>
                <td>Luis</td>
                <td>9 - 17</td>
                <td>9 - 17</td>
                <td>Descanso</td>
                <td>9 - 17</td>
                <td>9 - 17</td>

            </tr>

            <tr>
                <td>Mari</td>
                <td>9 - 17</td>
                <td>9 - 17</td>
                <td>9 - 17</td>
                <td>9 - 17</td>
                <td>Descanso</td>

            </tr>



        </table>
    </div>
        
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
        <div class="card " style="width:250px">
          <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">Ejemplo</h4>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi error inventore maxime quibusdam facilis laborum est obcaecati vitae expedita excepturi nisi voluptatibus, officia omnis animi quidem fugit non ullam voluptates.</p>
            <a href="#" class="btn btn-primary">Ver Perfil</a>
          </div>
        </div>
      </div>
        <div class="col-sm-4">
    <div class="card " style="width:250px">
      <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Ejemplo</h4>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi error inventore maxime quibusdam facilis laborum est obcaecati vitae expedita excepturi nisi voluptatibus, officia omnis animi quidem fugit non ullam voluptates.</p>
        <a href="#" class="btn btn-primary">Ver Perfil</a>
      </div>
    </div>
  </div>
    <div class="col-sm-4">
    <div class="card " style="width:250px">
      <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Ejemplo</h4>
        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi error inventore maxime quibusdam facilis laborum est obcaecati vitae expedita excepturi nisi voluptatibus, officia omnis animi quidem fugit non ullam voluptates.</p>
        <a href="#" class="btn btn-primary">Ver Perfil</a>
      </div>
    </div>
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

