<?php
session_start();  
if(!isset($_SESSION["username"]))  
{  
     header("location:index.php?action=login");  
}
?>
  
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Insertar nº telefono </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insertar nº telefono</h3>  
                <br />    
                <form  action ="insertar.php" method="post" value="<?php echo $row["id"]?>">  
                     <input type="text" name="nombre"  placeholder="nombre" class="form-control" /><br>
                     <input type="text" name="telefono"  placeholder="telefono" class="form-control" />
                     <br/>   
                     <input type="submit" name="eliminar" value="Añadir" class="btn btn-info" />
                     <a align="center" href="botones.php" class="btn btn-success">Regresar</a>   
                     <br/>  
                                   </form> 
                                   <br>
                                   <h5>  NOMBRE  TELEFONOS</h5> 
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
                                             $sql = "SELECT * FROM telefono";
                                             $result = $conn->query($sql);
                                             $row = mysqli_fetch_array($result);
                                             while ($row = $result->fetch_assoc()) {
                                              echo  "" . $row['nombre'] . "\n" . $row['numero']. "<br>";
                                             }
                                             ?>
                              </html>

<?php
$row = $result;
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
$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$sql = "INSERT INTO telefono (nombre,numero) VALUES ('$nombre','$telefono')";
$result = $conn->query($sql);
?>