
<?php  

require 'conexion.php';

//antes de nada obtengo la contraseña y la cifro para insertarla
$password = $_POST['password'];

//y ahora cifro la clave usando un hash
$hash = password_hash($password, PASSWORD_DEFAULT, array("cost"=>15));

/*
el "cost" lo que indica es la fuerza con la que se cifra la clave
a mayor fuerza mas tiempo de carga requiere la página por eso es
importante que busques un equilibrio
*/

/*
compruebo que la conexion es correcta
y de ser asi hago el insert
*/
if ($conexion == true) {
	

 //redirijo a otro archivo php
 echo "OK";
} else {
 echo "Algo ha fallado bro";
}
?>