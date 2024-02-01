<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    
    
    
</head>
<body>
    <h1>COMPONENTES DEL SISTEMA</h1>
    <hr>
    <!--Comentario en HTML -->
    <p id="parrafo1">Lorem, ipsum dolor sit amet consectetur adipisicing <br>
        elit. Doloribus asperiores dolorem non, eveniet vero odio  <br> 
        voluptates temporibus accusamus, <a href="#">possimus sed</a> possimus sed tempora pariatur, <br>
         nam ea repellendus perferendis! Deserunt ratione eligendi ad.</p>

        <h2>Formularios</h2>

        <form action="#"  method="#">
            <label for="Name">Nombre</label>
            <input type="Nombre" id="Name" required>
            <br>
            <label for="Last name" >Apellido</label>
            <input type="Apellido" id="LastName" required>
            <br>
            <label for="age">Edad</label>
            <input type="number" name="Edad" id="edad" min="0" max="150" step="10">
            <br>
            <label for="birthdate">Fecha de nacimiento</label>
            <input type="date" name="nacimiendo" id="FechaNacimiento">
            <br>
            <label for="Email">Correo</label>
            <input type="email" id="Email">
            <br>
            <label for="password">Contraseña</label>
            <input type="password" id="passw" required>
            <br>
            


         <label for="boton">Boton</label>
         <button  type="submit">Enviar</button>
         <button  type="reset">Limpiar campos</button>
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

    <div id="DivTabla">
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

