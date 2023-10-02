<?php
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo "<h2>Tarea Clase 5 - PD - Programación Back End</h2>" . "<h1>ESTRUCTURAS DE REPETICIÓN</h1>";

// 1) Mostrar los números del 1 al 9
echo "<h3>Números del <span>1 al 9</span></h3>";

$numero = 1;

while($numero <= 9){
        echo "Esta es la iteración número: " . $numero;
        echo "<br>";
        $numero ++;        
    }

// 2) Mostrar los números del 9 al 1
echo "<h3>Números del <span>9 al 1</span></h3>";

$numero = 9;

while($numero >= 1){
        echo "Esta es la iteración número: " . $numero;
        echo "<br>";
        $numero -= 1;
    }    

// 3) Mostrar los números pares del 1 al 20
echo "<h3>Números <span>pares</span> del <span>1 al 20</span></h3>";

$numero = 2;

while($numero <= 20){
        echo "Esta es la iteración número: " . $numero;
        echo "<br>";
        $numero += 2;
    }       

// 4) Mostrar los números impares del 1 al 20
echo "<h3>Números <span>impares</span> del <span>1 al 20</span></h3>";

$numero = 1;

while($numero <= 20){
        echo "Esta es la iteración número: " . $numero;
        echo "<br>";
        $numero += 2;
    } 
    