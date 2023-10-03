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

while($numero == 10){
    $numero --;
}

while($numero >= 1){   
        echo "Esta es la iteración número: " . $numero;
        echo "<br>";
        $numero -= 1;
    }    

// 3) Mostrar los números pares del 1 al 20
echo "<h3>Números <span>pares</span> del <span>1 al 20</span></h3>";

while($numero == 0){
        $numero += 2;
    }

while($numero <= 20){  
        echo "Esta es la iteración número: " . $numero;
        echo "<br>";
        $numero += 2;
    }       

// 4) Mostrar los números impares del 1 al 20
echo "<h3>Números <span>impares</span> del <span>1 al 20</span></h3>";

while($numero == 22){
    $numero -= 21;
}

while($numero <= 20){    
    echo "Esta es la iteración número: " . $numero;
    echo "<br>";
    $numero += 2;
}  

// 5) Mostrar la suma de los números del 1 al 20
echo "<h3>Suma de los números del <span>1 al 20</span></h3>";
$suma = 0;

while($numero == 21){
    $numero -= 20;
}

while($numero <= 20){
    $suma += $numero;
    $numero++;  
}  
    echo "La suma de los números del 1 al 20 es $suma";


// 6) Mostrar la suma de los números pares del 1 al 20echo "<h3>uma de los números del <span>1 al 20</span></h3>";
echo "<h3>Suma de los <span>números pares</span>del <span>1 al 20</span></h3>";


while($numero == 21){
    $numero -= 21;
}

while($numero <= 20){
    $suma += $numero;
    $numero += 2;  
}  
    echo "La suma de los números del 1 al 20 es $suma";
?>
