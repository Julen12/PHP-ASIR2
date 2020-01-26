<?php
session_start();  
if(!isset($_SESSION["username"]))  
{  
     header("location:index.php?action=login");  
}  
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:50px";>
        <img src="whatsapp_logo.png"> 
<form action="crear_grupo.php" method="POST"> <br>
    <input type="text"  name="phones" placeholder="telefonos"><br>
    <br>
    <input type="text" name="mensaje" placeholder="mensaje"><br>
    <br>
    <input type="text" name="nombre_grupo" placeholder="nombre del grupo"><br>
    <br>
    <input type="submit" value="Crear Grupo">
    <a align="center" href="botones.php" class="btn btn-success">Regresar</a> 
    <br> <br>
                                               <div class="telefonos">
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
                                             </div>
    
    </form>
    <style>
    .telefonos{
        position:relative;
        left:660px;
        bottom:550px;
    }
    </style>
</body>
</html>
 <?php
    $data = [
        
            "phones" => $_POST['phones'],
            "messageText" => $_POST['mensaje'],
            "groupName" => $_POST['nombre_grupo'],
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $url = 'https://api.chat-api.com/instance94465/group?token=lp7q7u5rxp14rf7k';
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    // Send a request
    $result = file_get_contents($url, false, $options);
    ?>
    