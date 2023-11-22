<?php
$conexion = mysqli_connect("localhost:3306", "root", "", "servicios");

$nombre_producto= $_POST ["nombre_producto"];
$descripcion_producto= $_POST ["descripcion_producto"];
$tipo_producto= $_POST ["tipo_producto"];
$precio_producto= $_POST ["precio_producto"];

$query="";
$resultado = mysqli_query($conexion, $query)->query($query);

if($resultado === true){
    echo "<p>Se edito el producto correctamente!</p>";
    echo "<a href='./admin.php'>Volver</a>";
}
else{
    echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
    echo "<a href='./admin.php'>Volver</a>";
}

mysqli_close($conexion);
?>

<form action="editar_preceso.php?id_producto="<?php echo $fila["id_producto"]; ?>" method="post">
    <label for="id_producto">ID</label>
    <input type="text" REQUIRED id="id_producto" name="id_producto" value="<?php echo $fila['id_producto']; ?>"><br>  
    <label for="nombre_producto">Nombre</label>
    <input type="text" id="nombre_producto" name="nombre_producto" value="<?php echo $fila['nombre_producto']; ?>"><br>  
    <label for="tipo_producto">Tipo</label>
    <input type="text" id="tipo_producto" name="tipo_producto" value="<?php echo $fila['tipo_producto']; ?>"><br>  
    <label for="descripcion_producto">Descripción</label>
    <textarea id="descripcion_producto" name="descripcion_producto" value="<?php echo $fila['descripcion_producto']; ?>"></textarea><br>  
    <input type="text" id="precio_producto" name="precio_producto" value="<?php echo $fila['precio_producto']; ?>"><br>  
    <label for="precio_producto">Precio</label>
    <button>Editar Producto</button>
    <a href="./admin.php">Cancelar</a>
</form> 