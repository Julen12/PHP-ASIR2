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
           <title>Actualizar nº telefono </title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Actualizar nº telefono</h3>  
                <br />    
                <form  action ="actualizar.php" method="post">  
                     <label>Telefono</label>  
                     <input type="text" name="nombre"   placeholder="nombre" class="form-control"/><br>
                     <input type="text" name="telefono"   placeholder="telefono" class="form-control"/>
                     <br/>   
                     <a align="center" href="botones.php" class="btn btn-success">Regresar</a>
                     <input type="submit" name="actualizar" value="Actualizar" class="btn btn-info" />   
                     <br/>  
                                   </form> 
                                   <br>
                                   <h5> NOMBRE     TELEFONO</h5> 
                                             <?php
                                             $servername = "localhost";
                                             $username = "root";
                                             $password = "Admin108";
                                             $dbname = "cuenta";
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
$servername = "localhost";
$username = "root";
$password = "Admin108";
$dbname = "cuenta";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$sql = "UPDATE telefono SET numero='$telefono' WHERE nombre = '$nombre'";
$result = $conn->query($sql);
?>
