<?php

//receber o valor do formulario

$numero = $_POST['numero'];

//contador
$x = 1;

while ($x <= 10) {

   $result = $numero * $x;
   echo " $numero"."x"."$x"."="."$result";
   echo "<br>";
   $x++;
   
}



?>