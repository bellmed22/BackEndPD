<?php 
    echo '<link rel="stylesheet" type="text/css" href="style.css">';
    echo "<h2>Tarea Clase 8<br> PD - Programación Back End</h2>" . "<h1>FUNCIONES</h1>";



   echo "<h3>a) Función Cuadrado</h3>";   

    function calculos_cuadrado($lado) {
        $perimetro = $lado * 4;    
        $superficie = $lado * $lado;     
        echo "Perímetro: " . $perimetro . "<br>";    
        echo "Superficie: " . $superficie . "<br>";    
    }    
    
    calculos_cuadrado(46);
    echo "<br>"; 

    calculos_cuadrado(7);    
    echo "<br>"; 
    
    calculos_cuadrado(19);
    echo "<br>"; 
  


    echo "<h3>b) Función Mayúsculas / Minúsculas</h3>"; 

    function mayusculas($string) {
        $caps = strtoupper($string);    
        echo $caps . "<br>";    
    }

    function minusculas($string) {
        $nocaps= strtolower($string);    
        echo $nocaps . "<br>";    
    }

    $cadena = "Soy una cadena de prueba.";
    mayusculas($cadena);
    minusculas($cadena);



    echo "<h3>c) Función Meses</h3>"; 

    function dias_mes($mes) {
        if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {    
            return "El mes " . $mes . " tiene 30 días.";    
        } else if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {    
            return "El mes " . $mes . " tiene 31 días.";    
        } else if ($mes == 2) {    
            return "El mes " . $mes . " tiene 28/29 días.";    
        } 
    }
    
    
    $mes = 1;    
    $resultado = dias_mes($mes);    
    echo $resultado . "<br>";

    $mes = 9;    
    $resultado = dias_mes($mes);    
    echo $resultado . "<br>";

    $mes = 2;    
    $resultado = dias_mes($mes);    
    echo $resultado . "<br>";




