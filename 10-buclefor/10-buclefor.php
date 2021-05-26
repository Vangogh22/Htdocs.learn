<?php
 /*$resultado = 0;
for($i=0; $i <= 100; $i++){
    
    $resultado = $i + $resultado;
    echo "<p>$resultado</p>";
}
echo "el resultado de la suma es= $resultado";
*/
echo'<hr/>';

  if(isset($_GET['numero'])) {
      //cambiar tipo de dato
      $numero = (int)$_GET['numero'];
  }else{
      $numero = 1;   
  }
  

  
  echo "<h1>Tabla de multiplicar del numero $numero </h1>";
          
          for ($contador = 1; $contador <= 10; $contador ++){
              if($numero == 45){
                  echo "no se pueden mostrar las operaciones";
                  break;
              }
              echo "$numero x $contador =".($numero*$contador)."</br>";
              
          }
      //do while
 /**
              echo '<br/>';
$edad2 = 17;
$contador = 1;

do{
    echo "tienes acceso al local privado $contador</br>";
    $contador ++;
}while ($edad2 >= 18 && $contador <= 10);
          }*/ 
?>
