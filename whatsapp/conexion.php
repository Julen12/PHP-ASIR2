<?php
$servername = "localhost";
$username = "root";
$password = "Admin108";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Conexion realizada exitosamente";
?>