<?php
$servername = "localhost";
$username = "root";
$password = "Admin108";
$port = "3307";
// Create connection
$conn = new mysqli($servername, $username, $password, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>