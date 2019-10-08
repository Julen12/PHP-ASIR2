

 <?php

// leer desde el formulario
$user =  $_POST['user'];
echo '<br>';
$password = $_POST['password'];
ç
// verificar login
$user = "Mickey";
$pass = "Mouse";

{
    if(password_verify($pass, $hash) {
        echo "Login successful";
    } else {
        echo "Incorrect Login";
    }
} 



$pass = 'Mouse';
 $hash = password_hash($pass, PASSWORD_BCRYPT);
 $hash = '$2y$10$EwgwmASvzMis0.M/CkZyqeJwvlgbwVjTN.t7Zw0qjMQgn32NtpBBW';
echo $hash . "<br>";
 
if (password_verify($pass, $hash)) {
    // Success!
    echo "Success!";
}
else {
    // Invalid credentials
    echo "Error!";
}
 







