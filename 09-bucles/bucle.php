<?php

/* 
 *estructura de control que itera 
 */
//que el programa ejecute los numeros del 1 al 100

$numero = 0;
while ($numero <= 100)
{
   echo $numero;
   
   if($numero != 100){
       echo ", ";
   }
   $numero++;
}
  //ejemplo 
   //comprobar si existe
   /*echo "<Hr/>";
   if(_GET['numero']){
       $numero = $_GET['numero'];
   }else {
       $numero = 1;
   }
   var_dump($numero);

   */

   echo "<Hr/>";
  if(isset($_GET['numero'])) {
      $numero = (int)$_GET['numero'];
  }else{
      $numero = 1; 
      
  }
  var_dump($numero);
  
  echo "<hr/>";
  
  echo "<h1>Tabla de multiplicar del numero $numero </h1>";
          $contador = 1;
          while ($contador <= 10){
              echo "$numero x $contador =".($numero*$contador)."</br>";
              $contador ++;
              
              
       //do while
echo '<br/>';
$edad2 = 17;
$contador = 1;

do{
    echo "tienes acceso al local privado $contador</br>";
    $contador ++;
}while ($edad2 >= 18 && $contador <= 10);
          }
          
  