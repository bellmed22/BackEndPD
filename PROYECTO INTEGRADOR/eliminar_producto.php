<?php 

    $idProducto = $_GET["id"]; 
    
    $conexion = mysqli_connect("localhost:3306", "root", "", "servicios");

    $query = "DELETE FROM productos WHERE id_producto = $idProducto";
    $resultado = mysqli_query($conexion, $query);

    if($resultado === true){
        echo "<p>Se elimino el producto correctamente!</p>";
        echo "<a href='./productos.php'>Volver</a>";
    }
    else{
        echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
        echo "<a href='./productos.php'>Volver</a>";
    }

    mysqli_close($conexion);
?>