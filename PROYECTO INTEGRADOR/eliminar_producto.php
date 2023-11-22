<?php 
$conexion = mysqli_connect("localhost:3306", "root", "", "servicios");

$query = "DELETE FROM productos WHERE id = ";
$resultado = mysqli_query($conexion, $query);

if($resultado === true){
    echo "Se elimino el productoso correctamente!";
}
else{
    echo "Hubo un error, vuelva a intentarlo nuevamente!";
}

mysqli_close($conexion);
?>
