<?php
$pass = "Mouse";

{
    if($_POST["user"] == $user && $_POST["password"] == $pass) {
        echo "Login successful";
    } else {
        echo "Incorrect Login";
    }
} 
// verificar login






// leer desde el formulario
$user =  $_POST['user'];
echo '<br>';
$password = $_POST['password'];

