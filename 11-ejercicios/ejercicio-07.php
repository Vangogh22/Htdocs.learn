<?php


/* 
hacer un programa que muestre todos los numeros IMPARES entre dos numeros
 * mandados por url
 */


if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if($numero1 <= $numero2)
{
   
 for($i = $numero1; $i <= $numero2; $i++) {
  if($i%2 != 0){
echo "los numeros dentro del rango son ". $i . '</br>';
  }     
}

}else {
    echo 'introduzca dos numeros de la siguiente manera: debe poner al final de la url /?numero1=1&numero2=2';
}
}
?>
