<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo "<h2>Tarea Clase 4 - PD</h2>" . "<h1>Programación Back End</h1>";

// Consigna 1
$n = 5;
if($n > 0) {
        echo "El número ingresado es un número positivo" . "<br>";
}
// Consigna 2
$n = 7;
if($n > 1 && $n < 10) {
        echo "El número ingresado es mayor a 1 y menor a 10"  . "<br>";
}
// Consigna 3
$n = 12;
if ($n >= 10 || $n < 2) {
        echo "El número ingresado es mayor o igual a 10 o menor a 2" . "<br>";
} else {
        echo "El número ingresado no pudo ser validado" . "<br>";
}
// Consigna 4
$numero1 = 10;
$numero2 = 5;
echo "<br>";
if($numero1 > $numero2) {
        echo "La suma de los números es: " . ($numero1 + $numero2) . "<br>";
        echo "La resta de los números es: " . ($numero1 - $numero2) . "<br>";
} elseif ($numero2 > $numero1) {
        echo "La multiplicación de los números es: " . ($numero1 * $numero2) . "<br>";
        echo "La división entera de los números es: " . (int)($numero1 / $numero2) . "<br>";
        echo "El resto de la división de los números es: " . ($numero1 % $numero2 . "<br>");
} else {
        echo "Los números ingresados son iguales" . "<br>";
}
?>
