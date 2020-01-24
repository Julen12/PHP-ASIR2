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
<form action="enviar_mensajes.php" method="POST">
    <input type="text"  name="phone" placeholder="Telefono">
    <br>
    <br>

    <input type="text" name="body" placeholder="Mensaje">
    <br> <br>
    <input type="submit" value="Enviar">
    <a align="center" href="botones.php" class="btn btn-success">Regresar</a> 
    <br> <br>
                                               <div class="telefonos">
                                                <h5> TELEFONOS</h5> 
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
                                             echo $row['numero']."<br>";
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
</body>
</html>
<?php
    $data = [
        'phone' => $_POST['phone'], // Receivers phone
        'body' => $_POST['body'], // Message   
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $url = 'https://api.chat-api.com/instance93596/sendMessage?token=j78a2x7eauihs4h3';
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
                            
    

    





