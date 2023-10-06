<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo "<h2>Tarea Clase 6<br> PD - Programación Back End</h2>" . "<h1>ESTRUCTURAS DE REPETICIÓN</h1>";

// 1) Obtener y mostrar el resultado del factorial de 8
function factorial($n) {
  $factorial = 1;
  for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
  }
  return $factorial;
}
echo factorial(8);

// 2) Formulario alumno
$nombre = $_POST['nombre'];
$nota = $_POST['nota'];
// Validar los datos
if (empty($nombre)) {
  echo "Error: El nombre del alumno no fue ingresado.";
  exit;
}
if (empty($nota)) {
  echo "Error: La calificación no fue ingresada.";
  exit;
}
if (!is_numeric($nota)) {
  echo "Error: La calificación no es un número.";
  exit;
}
if ($nota < 0 || $nota > 10) {
  echo "Error: La calificación no está entre 0 y 10.";
  exit;
}
// Mostrar la calificación resultante
switch ($nota) {
  case 0:
  case 1:
  case 2:
    $calificacion = "Muy deficiente";
    break;
  case 3:
  case 4:
  case 5:
    $calificacion = "Insuficiente";
    break;
  case 6:
  case 7:
    $calificacion = "Bien";
    break;
  case 8:
  case 9:
    $calificacion = "Notable";
    break;
  case 10:
    $calificacion = "Sobresaliente";
    break;
}
echo "La calificación de $nombre es $calificacion.";

?>