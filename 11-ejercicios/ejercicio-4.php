<?php
/*
 * ejercicio 4: recoger dos numeros por URL con el parametro get, hacer todas las operaciones
 * de una calculadora basicaa con ella. la suma, la resta. la multiplicacion y la división
 */ if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1= $_GET['numero1'];
$numero2= $_GET['numero2'];

 echo "el resultado de multiplicar los numeros es:". $numero1*$numero2 . "</br>";

echo "el resultado de sumar los numeros es:". ($numero1+$numero2) . "</br>";

echo "el resultado de restar los numeros es:". ($numero1-$numero2) . "</br>";

echo "el resultado de dividir los numeros es:". $numero1%$numero2 . "</br>";
}
else{
    echo "introduce correctamente los valores en la url /?numero1=x&numero2=x";
}


  ?>
 
