<?php
$conexion = mysqli_connect("localhost:3306", "root", "", "servicios");
if (isset($_GET['editar_producto'])) {
    $idProducto = $_GET['id'];

    $query = "SELECT FROM productos WHERE id_producto = $idProducto";
    $resultado = mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($result);

    $nombre_producto = $fila['nombre_producto'];
    //echo $nombre_producto;
    $tipo_producto = $fila['tipo_producto'];
    $descripcion_producto = $fila['descripcion_producto'];
    $precio_producto = $fila['precio_producto'];
}

?>

<div class="container mt-5">
    <h3 class="text-center">Editar Producto</h3>
    <form action="" method="post" enctype="multipart/form-data">


        <div class="form outline w-50 m-auto mb-4">
            <label for="nombre_producto" class="form-label">Producto</label>
            <input type="text" id="nombre_producto" value="<?php echo $nombre_producto ?>" name="nombre_producto"
                class="form-control" required="required">
        </div>

        <div class="form outline w-50 m-auto mb-4">
            <label for="descripcion_producto" class="form-label">Tipo</label>
            <input type="text" id="descripcion_producto" value="<?php echo $descripcion_producto ?>"
                name="descripcion_producto" class="form-control" required="required">
        </div>

        <div class="form outline w-50 m-auto mb-4">
            <label for="descripcion_producto" class="form-label">Descripcion</label>
            <input type="text" id="descripcion_producto" value="<?php echo $descripcion_producto ?>"
                name="descripcion_producto" class="form-control" required="required">
        </div>

        <div class="form outline w-50 m-auto mb-4">
            <label for="descripcion_producto" class="form-label">Precio</label>
            <input type="text" id="descripcion_producto" value="<?php echo $descripcion_producto ?>"
                name="descripcion_producto" class="form-control" required="required">
        </div>
   
        <div class="w-50 m-auto">
            <input type="submit" name="editar_producto" value="Editar" class="btn btn-primary px-3 mb-3">


        </div>

    </form>

</div>


<!--Editing Products-->
<?php
if (isset($_POST['editar_producto'])) {
    $nombre_producto = $fila['nombre_producto'];
    //echo $nombre_producto;
    $tipo_producto = $fila['tipo_producto'];
    $descripcion_producto = $fila['descripcion_producto'];
    $precio_producto = $fila['precio_producto'];

   
    if ($nombre_producto == '' or $tipo_producto == '' or $descripcion_producto == '' or $precio_producto == '') {
        echo "Por favor completa todo los campos!";
    } else {
        //move_uploaded_file($temp_image, "./Product_images/$product_image");

        //update query products
        $actualizar_productos = "UPDATE `productos` SET `id_producto`='[value-1]',`nombre_producto`='[value-2]',`tipo_producto`='[value-3]',`descripcion_producto`='[value-4]',`precio_producto`='[value-5]' WHERE id_producto=$idProducto";
        $resultado_update = mysqli_query($conexion, $actualizar_productos);
        if ($resultado_update=== true){
            echo "<p>Producto editado con éxito!</p>";
            echo "<a href='./admin.php.php'>Volver</a>";
        }
        else{
            echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
            echo "<a href='./admin.php'>Volver</a>";

        }
    }
}