<?php
    if(!empty($_POST["nombre_producto"]) && !empty($_POST["tipo_producto"]) && !empty($_POST["descripcion_producto"]) && !empty($_POST["precio_producto"])){
        $conexion = mysqli_connect("localhost:3306", "root", "", "servicios");

        

        $query = "INSERT INTO productos(nombre_producto, tipo_producto, descripcion_producto, precio_producto) VALUES('".$_POST['nombre_producto']."', '".$_POST['tipo_producto']."', '".$_POST['descripcion_producto']."', '".$_POST['precio_producto']."')";
        $resultado = mysqli_query($conexion, $query);

        if($resultado === true){
            echo "<p>Se agrego el producto correctamente!</p>";
        }
        else{
            echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
        }

        mysqli_close($conexion);
    }
?>

<form method="post" action="">
    <label for="nombre_producto">Nombre</label>
    <input type="text" id="nombre_producto" name="nombre_producto"><br>  
    <label for="tipo_producto">Tipo</label>
    <input type="text" id="tipo_producto" name="tipo_producto"><br>  
    <label for="descripcion_producto">Descripción</label>
    <textarea id="descripcion_producto" name="descripcion_producto"></textarea>
    <input type="text" id="precio_producto" name="precio_producto"><br>  
    <label for="precio_producto">Precio</label>
    <button>Agregar Producto</button>
    <a href="./productos.php">Cancelar</a>
</form> 