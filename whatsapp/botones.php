<?php
session_start();  
if(!isset($_SESSION["username"]))  
{  
    session_destroy(); 
     header("location:index.php?action=login"); 
}  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br>
<a align="center" href="enviar_mensajes.php" class="btn btn-success">Enviar Mensaje</a><br> 
<br>
<a align="center" href="insertar.php" class="btn btn-success">Añadir nº telefono</a>
<a align="center" href="eliminar.php" class="btn btn-success">Eliminar nº telefono</a>
<a align="center" href="actualizar.php" class="btn btn-success">Actualizar nº telefono</a> <br>
<br>
<a align="center" href="logout.php" class="btn btn-success">Cerrar Sesion</a>
</html>

