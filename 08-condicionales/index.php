<?php
//comprobar si la persona es mayor de edad si
//$nombre = "Felipe";
//$edad = 42;
//$mayoria_edad = 18;

//if($edad >= $mayoria_edad) {
 //   echo "<h2>$nombre</h2>" . "<h2>es mayor de edad</h2>";
//} else {
 //echo "<h2>$nombre</h2>".'<h2>es mejor de edad</h2>';    
//}//


//comprobar que es mayor de edad y se muestre en que ciudad vive en Latam

$nombre = "Felipe";
$edad = 42;
$mayoria_edad = 18;
$ciudad = "bogotá";
$continente = "latam"; 

if($edad >= $mayoria_edad) {
    

    echo "<h2>$nombre</h2>" . "<h2>es mayor de edad</h2>";
    
     if($continente == "latam") {
    echo "<h2>es de $ciudad</h2>";
    
    } else { 
            echo 'no es latino';
        }
    
} else {
 echo "<h2>$nombre</h2>".'<h2>es menor de edad</h2>';    

}

//ejemplo 4

//$dia = 6;


//if ($dia == 1){
   // echo 'Es lunes';   
//}else{
   // if($dia == 2){
  //    echo 'es martes';
   // }else{
   //     if($dia == 3)
   //     { echo 'es miercoles';
   //     } else {
   //     if($dia == 4){ echo 'es jueves';
   //     } else {
  //      if($dia == 5){ echo 'es miercoles';}
 //else { 
   //  if($dia == 6){
     //    echo 'es sabado';}
    // else {
     //    if($dia == 7){
      //       echo 'es domingo';
         
     //    }
    // }
   //  }
   //     }
   //     }
   // }
///}
/* $dia = 3;
if($dia ==1){echo "lunes";}
elseif($dia == 2) {echo "martes";}
elseif ($dia == 3) {
    echo 'mercoles';
}
elseif ($dia == 4) {
echo 'jueves';
}
elseif ($dia == 5){
    echo 'viernes';
}
?>
 */

/* $edad1 = 18;
$edad2 = 64;

$edad_persona = 20;

if($edad_persona >= $edad1 && $edad_persona <= $edad2){
    echo  'esta en edad de trabajar';
}else{
    echo 'no puede trabajar';
}
*/

//saber si en un pais se habla español
$pais = "Colombia";

if($pais == "Colombia" || $pais == "Mexico" || $pais == "España"){
    echo 'se habla español';
} else {
echo 'no se habla español';    
}

echo "<hr/>";

//SWITCH

$dia = 14;

switch ($dia){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3;
        echo 'Miercoles';
        break;
    case 4;
        echo 'Jueves';
        break;
    case 5;
        echo 'Viernes';
        break;
    case 6;
        echo 'Sabado';
        break;
    default:
        echo 'es fin de semana';
}