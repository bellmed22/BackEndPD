<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo "<h2>Tarea Clase 5 - PD - Programación Back End</h2>" . "<h1>ESTRUCTURAS DE REPETICIÓN</h1>";

// 1) Mostrar los números del 1 al 9
echo "<h3>Números del <span>1 al 9</span></h3>";

for ($i = 1; $i <= 9; $i++) {
        echo "Esta es la iteración número: $i";
        echo "<br>";
      }
      echo "\n";

// 2) Mostrar los números del 9 al 1
echo "<h3>Números del <span>9 al 1</span></h3>";

for ($i = 9; $i >= 1; $i--) {
    echo "Esta es la iteración número: $i";
    echo "<br>";
  }
  echo "\n";  

// 3) Mostrar los números pares del 1 al 20
echo "<h3>Números <span>pares</span> del <span>1 al 20</span></h3>";

for ($i = 2; $i <= 20; $i += 2) {
    echo "Esta es la iteración número: $i";
    echo "<br>";
  }
  echo "\n";     

// 4) Mostrar los números impares del 1 al 20
echo "<h3>Números <span>impares</span> del <span>1 al 20</span></h3>";

for ($i = 1; $i <= 20; $i += 2) {
    echo "Esta es la iteración número: $i";
    echo "<br>";
  }
  echo "\n"; 

// 5) Mostrar la suma de los números del 1 al 20
echo "<h3>Suma de los números del <span>1 al 20</span></h3>";

$suma = 0;
for ($i = 1; $i <= 20; $i++) {
  $suma += $i;
}
echo "La suma de los números del 1 al 20 es $suma \n";


// 6) Mostrar la suma de los números pares del 1 al 20echo "<h3>uma de los números del <span>1 al 20</span></h3>";
echo "<h3>Suma de los <span>números pares</span> del <span>1 al 20</span></h3>";

$suma = 0;
for ($i = 2; $i <= 20; $i += 2) {
  $suma += $i;
}
    echo "La suma de los números pares del 1 al 20 es $suma \n";
?>
