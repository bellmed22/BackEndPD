
<?php include ("conexion.php");?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="diseño gráfico, desarrollo web, responsive, UX UI, branding">
    <meta name="description" content="Desarrollo web, diseño, ilustración">
    <meta name="autor" content="BLM">
    <title>Ilustack - Ilustraciones y Desarrollo Web</title>


    <!-- CSS -->
    <!-- Externas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

        <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
        <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    

    <!-- Vendor CSS Files 
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Local -->  
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/servicios.css">
    <link rel="stylesheet" href="./css/form.css">
     
     <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    
</head>

<body>

<!-- HEADER -->

<?php include("header.php")?> <!-- Header --> 

<!-- FORMULARIO --> 
<section>
<div class="wrapper">




<?php if (isset($_POST['agregar'])) {

    $producto = $_POST['producto'];
    $tipo = $_POST['tipo'];
    $descriction = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO productos(producto, tipo, descripcion, precio) VALUES('{$producto}', '{$tipo}', '{$descripcion}', '{$precio}')";
    if($resultado === true){
        echo "<p>Se agrego el producto correctamente!</p>";
    }
    else{
        echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
    }
    mysqli_close($conexion);
    }
?>



  <h3>Agregar productos</h3>

  <div class="form-container">   
    <div class="form-inner">
      <form action="" class="add" method="post" enctype="multipart/form-data">        
        <div class="field">
          <label for="producto">Producto</label>
          <input type="text" name="producto" placeholder="Producto" required>
        </div>
        </br>

        <div class="field">
        <label for="tipo">Tipo</label>
          <input type="text" name="tipo" placeholder="Tipo" required>
        </div>
        </br>

        <div class="field">
        <label for="descripcion">Descripción</label>
        <textarea cols="40" rows="5" name="descripcion" placeholder="Descripción" required></textarea>
        </div>
        </br>
        <div class="field">
        <label for="precio">Precio</label>
          <input type="text" name="precio" placeholder="Precio" required>
        </div>  
        </br>
        <div class="field">
          <input type="submit" name="agregar" value="Enviar">
        </div>
      </form>      
    </div>
  </div>
</div>  

<!-- SCRIPTS -->


    <!-- jQuery - JS-->


    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- form Js -->
    <script src="./Js/form.js"></script>
</body>

</html>