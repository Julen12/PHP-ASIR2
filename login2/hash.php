<?php

$pass = 'Mouse';
 $hash = password_hash($pass, PASSWORD_DEFAULT);
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
 
