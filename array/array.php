<?php
 $v = [1,5,6,77,666,555,444,6666,444,666];





/* $suma = $v[0] + $v[1] + $v[2];
echo "batura: " . $suma; */

// for (bucles)
$suma = 0;
for ($i=0; $i < count($v); $i++) {
    // echo " The number is:  $v <br>";
    $suma = $suma +$v[$i];
   //echo $v[$i] . "<br>";
}
    


 echo "batura: " . $suma;
    

// while


$suma = 0;
$i = 0;
while ($i < count($v)) {
    $suma = $suma + $v[$i];
    $i++;
}
echo "batura while: " . $suma . "<br>";
// foreach
foreach ($v as $x) {
    //echo $x . "<br>";
    $suma = $suma + $x;
}
echo "batura foreach: " . $suma;