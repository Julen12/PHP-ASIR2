<?php
$servername = "localhost";
$username = "root";
$password = "Admin108";
$dbname = "asir2_crud";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_POST['user'];
$password = $_POST['password'];
//
$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if ($password == $row["pass"]) {
            echo "OK";
            header("Location: delete_boton.php");
        } else{
            echo "KO";
            header("Location: read.php");
            
        }
    } else {
        echo "KO";
        header("Location: delete_boton.php");
        
    }
} else {
    echo "KO";
    header("Location: read_boton.php");
    
}
$conn->close();