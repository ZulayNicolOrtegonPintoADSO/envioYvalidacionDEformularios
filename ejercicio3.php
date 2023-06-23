<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio y validación de documentos</title>
</head>
<body>
    <form action="" method="post">

        <label for="nombre"> Nombre:</label> 
        <input type="text" name="nombre" id="nombre">

        <label for="edad"> Edad:</label> 
        <input type="number" name="edad" id="edad">

        <label for="correo"> Correo:</label> 
        <input type="email" name="correo" id="correo">

        <br>

        <label> Rol: </label>
        <ul> Aprendiz <input type="radio" name="rol" id="rol" value="aprendiz"> </ul> 
        <ul> Instructor <input type="radio" name="rol" id="rol" value="instructor"> </ul> 
        <ul> Administrativo <input type="radio" name="rol" id="rol" value="adinistrativo"> </ul> 

        <input type="submit" value="Enviar">

    </form>
</body>
</html>


<?php
    if($_POST){  // El condicional está diciendo que si se envia información se reciba la información, se almacene en una variable y se imprima 
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        $correo=$_POST['correo'];
        $rol=$_POST['rol'];  
       
        echo "<div style=\"border:1px solid black; background-color:yellow;\">
                Los datos recibidos son:
                <ul>Nombre:  $nombre </ul>
                <ul>Edad:  $edad </ul>
                <ul>Correo:  $correo</ul>
                <ul>Rol: $rol </ul>
			  </div>";
    }
?>