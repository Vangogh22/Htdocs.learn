<?php



/* 
 imprimir pon pantalla todas las tablas de multiplicar del 1 al 10 y mostrar
 * en una tabla de html*/

//estatico, el numero se cambia cada tabla

//movil, el numero pasa de 1 a 10 en cada tabla. 
echo "<table border = '1'>" . "<tr>";
//inicio primera filas
echo "<tr>";

for ($cabecera =1; $cabecera <=10; $cabecera++){
    echo "<td>";
    echo "tabla de $cabecera";

    echo "</td>";
}
echo "</tr>";


echo "<tr>";

for ($i =1; $i <=10; $i++){
    echo "<td>";
   
    for ($x = 1; $x <= 10; $x++){
        
        echo "$i x $x = " . ($i*$x)."<br>";
    }

    echo "</td>";
}
echo "</tr>";

?>