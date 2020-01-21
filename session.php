<?php
session_start();
if (isset($_SESSION['count'])) {
  echo "Session inicializada";
} else {
  echo "No tengo session. Redirigir";
}


$x=0;
$x=$x+1;
echo $x;


