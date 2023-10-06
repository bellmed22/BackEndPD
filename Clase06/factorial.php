<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo "<h2>Tarea Clase 6<br> PD - Programación Back End</h2>" . "<h1>FACTORIAL 8</h1>";

// 1) Obtener y mostrar el resultado del factorial de 8
function factorial($n) {
  $factorial = 1;
  for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
  }
  return $factorial;
}
echo factorial(8);

?>