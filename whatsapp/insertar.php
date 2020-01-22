<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Añadir nº telefono </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insertar nº telefono</h3>  
                <br />    
                <form  action ="insertar.php" method="post">  
                     <label>Telefono</label>  
                     <input type="text" name="telefono" class="form-control" />  
                     <br />  
                     <input type="submit" name="enviar" value="Añadir" class="btn btn-info" />
                     <a align="center" href="botones.php" class="btn btn-success">Regresar</a>  
                     <br/>  
                </form>  
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "Admin108";
$dbname = "login";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$telefono =  $_POST['telefono'];
$sql = "insert into telefono (numero) VALUES ('$telefono')";
$result = $conn->query($sql);