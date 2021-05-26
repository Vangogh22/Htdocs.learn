<?php

/* 
hacer un programa que muestre todos los numeros entre dos numeros
 * mandados por url
 */


if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
while($numero1 <= $numero2)
{
 echo "los numeros dentro del rango son ". $numero1."</br>";
        $numero1 ++;
}

}else {
    echo 'introduzca dos numeros de la siguiente manera: debe poner al final de la url /?numero1=1&numero2=2';
}
?>