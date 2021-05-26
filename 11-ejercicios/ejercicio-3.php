<?php

/* 
 un programa que imprima por pantalla los cuadrados (unnumero multiplicado por si
 * mismo) de los 40 primeros numero s naturales utilizando el bucle while
 */
/*
$i=0;
while ($i <= 40)
{
    echo "el cuadrado de $i es". ($i * $i). "</br>";
    $i ++;
}
*/
$resultado = 0;
for($i=0; $i <= 40; $i++){
   $resultado = $i*$i;
   echo "el resultado de $i es: " . $resultado . "</br>";
}
?>