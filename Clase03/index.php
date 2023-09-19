<?php 
    echo '<link rel="stylesheet" type="text/css" href="style.css"></head>';
    //HOLA MUNDO!
    echo "<h1>Hola Mundo!</h1>";
    echo "Va de nuevo...";

    //HOLA MUNDO! 2      
    $saludo = "<h1><span>Hola Mundo!</span></h1>"; 
    echo $saludo; 



    //OPERACIONES ARITMÉTICAS
    //Variables
    $numero1 = 81;
    $numero2 = 46;

    echo "<h1>OPERACIONES EN PHP</h1>";

    echo "<h2>Aritméticas</h2>
            <h4><strong>Valores: </strong> 81 - 46</h4><br>";
   
    //SUMA 
    echo "<h4>SUMA</h4>";
    echo "$numero2 + $numero2 = ";
    echo $numero2 + $numero2;   
    echo "<br>";

    //RESTA
    echo "<h4>RESTA</h4>";
    echo "$numero1 - $numero2 = ";
    echo $numero1 - $numero2;    
    echo "<br>";

    //MULTIPLICACIÓN
    echo "<h4>MULTIPLICACIÓN</h4>";
    echo "$numero1 * $numero1 = ";
    echo $numero1 * $numero1;    
    echo "<br>";

    //DIVISIÓN
    echo "<h4>DIVISIÓN</h4>";
    echo "$numero1 / $numero2 = ";
    echo (float) ($numero1 / $numero2);
    echo "<br>";

    //RESTO
    echo "<h4>RESTO</h4>";
    echo "$numero2 % $numero1 = ";
    echo $numero2 % $numero1;
    echo "<br>";



    //CONVERSOR DE GRADOS
    //Variables

    $celcius = 20;
    $farenheit = ($celcius * 9/5) + 32;

    echo "<h2>Conversor de grados</h2>
            <h4>FÓRMULA: F = (C * 9/5) + 32</h4>
            F: Farenheit | C: Celcius";            
   
    //CONVERSIÓN
    echo "<h3><em>$celcius grados Celcius son $farenheit grados Farenheit.</em></h3>";



    //ÁREAS Y PERÍMETROS
    echo "<h2>Aréas y perímetros</h2>
    <h4>RECTÁNGULO</h4>";

    //Variables Rectángulo
    $base = 18; 
    $altura = 12;
    $areaR = $base * $altura;
    $perimetroR = ($base * 2) + ($altura *2);

    echo "Base: 18cm<br>
         Altura: 12cm<br>";
    echo "<br>";    

    echo "<em>El área del rectángulo es $areaR cm, y su perímetro es $perimetroR cm.</em>";
      
    echo "<h4>CÍRCULO</h4>";
    
    //Variables Círculo
    $radio = 30; 
    $radio_pow = pow($radio, 2);
    $areaC = M_PI() * $radio_pow;
    $perimetroC = 2 * $radio * M_PI(); 

    echo "Radio: 30cm<br>";
    echo "<br>";
    
    echo "<em>El área del círculo es $areaC cm, y su perímetro es $perimetroC cm.</em>";    
?>