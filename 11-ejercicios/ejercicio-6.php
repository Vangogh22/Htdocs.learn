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
for ($i=1; $i<=10; $i++){
    echo "<td>";
    echo "1 x $i =" . $i*1 ;
    echo "</td>";
}
echo "</tr>";

echo "<tr>";

for ($i2 = 1; $i2 <= 10; $i2 ++ ) {
    echo "<td>";
    echo "2 x $i2 = " . $i2*2;
    echo "</td>";
}

echo "</tr>";

echo "<tr>";

for ($i3 = 1; $i3 <= 10; $i3 ++) {
    echo "<td>";
   echo "3 x $i3 = " . $i3*3;
    echo "</td>";
    
}

echo "</tr>";

echo "<tr>";

for ($i4 = 1; $i4 <= 10; $i4 ++) {
    echo "<td>";
   echo "4 x $i4 = " . $i4*4;
    echo "</td>";
    
}

echo "</tr>";

echo "<tr>";

for ($i5 = 1; $i5 <= 10; $i5 ++){
    echo "<td>";
     echo "5 x $i5 = " . $i5*2;
    echo "</td>";
}

echo "<tr>";


for($i6 = 1; $i6 <= 10; $i6++){
    echo "<td>";
    echo "6 x $i6 = " . $i6*6;
echo "</td>";    

}
echo "</tr>";

echo "<tr>";
for ($i7 = 1; $i7 <= 10; $i7++){
echo "<td>";
echo "7 x $i7 = " . 7*$i7;
echo "</td>";
}
echo "</tr>";

echo "<tr>";

for ($i8 = 1; $i8 <= 10; $i8++){
echo "<td>";
echo "8 x $i8 = " . 8*$i8;
echo "</td>";
}
echo "</tr>";

echo "<tr>";
for ($i9 = 1; $i9 <= 10; $i9++){
echo "<td>";
echo "9 x $i9 = " . 9*$i9;
echo "</td>";
}
echo "</tr>";

echo "<tr>";
for ($i10 = 1; $i10 <= 10; $i10++){
echo "<td>";
echo "10 x $i10 = " . 10*$i10;
echo "</td>";
}
echo "</tr>";

echo "</table>";
  
?>
