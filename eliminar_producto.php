<?php 
$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

$query = "DELETE FROM productos WHERE codigo = 4";
$resultado = mysqli_query($conexion, $query);

if($resultado === true){
    echo "Se elimino el producto correctamente!";
}
else{
    echo "Hubo un error, vuelva a intentarlo nuevamente!";
}

mysqli_close($conexion);
?>