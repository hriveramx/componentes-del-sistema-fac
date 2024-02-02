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
            <label for="Email">Correo</label>
            <input type="email" id="Email"class="form-control">
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

         <img src="https://desarrolloweb.com/storage/manual_images/WWIe25guH9aTMSYX75ZSzBmcLJXBqoWnVklpatud.jpg" alt="imagen de Laravel" width="200" height="200">

        <h4>Tablas</h4>

    <div>
        <table>
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
        

</body>
</html>

