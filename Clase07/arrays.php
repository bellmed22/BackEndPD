<?php 
    echo '<link rel="stylesheet" type="text/css" href="style.css">';
    echo "<h2>Tarea Clase 7<br> PD - Programación Back End</h2>" . "<h1>ARRAYS</h1>";

    // a) Almacenar enarray y mostrar en pantalla
    echo "<h4>10 primeros números pares</h4>";

    $array1 = ["0", "2", "4", "6", "8", "10"];
 
    foreach($array1 as $pares){
        echo $pares."</br>";
    }

    // b) Crear un array y mostrar el esquema con print_r().
    echo "<h4>Valores mixtos</h4>";

    $array2 = ["Pedro", "Ana", 34, 1];
    print_r($array2);

    //c) Crear un array asociativo
    echo "<h4>Array asociativo</h4>";

    $array_asociativo1 = [
        "Nombre" => "Pedro",
        "Apellido" => "Torres",
        "Dirección" => "Av. Mayo 3703",
        "Teléfono" => "1122334455"
    ];
    
    var_dump($array_asociativo1);

    // Crear un array introduciendo ciudades
    echo "<h4>Ciudades</h4>";

    $array_asociativo2 = [
        "0" => "Madrid",
        "1" => "Barcelona",
        "2" => "Londres",
        "3" => "New York",
        "4" => "Los Angeles",
        "7" => "Chicago"
    ];

    foreach($array_asociativo2 as $indice => $ciudad){
        echo "La ciudad con el índice: <strong>".$indice."</strong> es: <strong>".$ciudad."</strong><br>";
    }

    // Crear un array introduciendo ciudades
    echo "<h4>Ciudades 2</h4>";

    $array_asociativo2 = [
        "Madrid" => "MD",
        "Barcelona" => "BCL",
        "Londres" => "LD",
        "New York" => "NY",
        "Los Angeles" => "LA",
        "Chicago" => "CCG"
    ];

    foreach($array_asociativo2 as $ciudad => $indice){
        echo "El índice de <strong>".$ciudad."</strong> es: <strong>".$indice."</strong><br>";
    }



?>