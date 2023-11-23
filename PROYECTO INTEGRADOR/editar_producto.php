<?php

include 'conexion.php';

$id_producto = $_REQUEST['id_producto'];
$query="SELECT * FROM productos WHERE id_producto ='$id_producto'";
$resultado = mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($resultado);

mysqli_close($conexion);
?>



<form action="editar.php?id_producto="<?php echo $fila["id_producto"]; ?>" method="post">
    <label for="id_producto">ID</label>
    <input type="text" REQUIRED id="id_producto" name="id_producto" value="<?php echo $fila['id_producto']; ?>"><br>  
    <label for="nombre_producto">Nombre</label>
    <input type="text" id="nombre_producto" name="nombre_producto" value="<?php echo $fila['nombre_producto']; ?>"><br>  
    <label for="tipo_producto">Tipo</label>
    <input type="text" id="tipo_producto" name="tipo_producto" value="<?php echo $fila['tipo_producto']; ?>"><br>  
    <label for="descripcion_producto">Descripción</label>
    <textarea id="descripcion_producto" name="descripcion_producto"><?php echo $fila['descripcion_producto']; ?></textarea><br>  
    <label for="precio_producto">Precio</label>
    <input type="text" id="precio_producto" name="precio_producto" value="<?php echo $fila['precio_producto']; ?>"><br>    
    <input type="submit" name="editar_producto" value="Editar" class="btn btn-primary px-3 mb-3">

</form>