<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="diseño gráfico, desarrollo web, responsive, UX UI, branding">
        <meta name="description" content="Desarrollo web, diseño, ilustración">
        <meta name="author" content="BLM">
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

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        
    
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    
    
    
        <!-- Local -->
        <link rel="stylesheet" href="./Css/main.css">
        <link rel="stylesheet" href="./Css/gestion.css">
    
        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    
    
    </head>
  <body>
    <div class="container">
        <div class="table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Gestión de <b>Productos</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir item</span></a>
                <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar item</span></a>
              </div>
            </div>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
               <!-- <th>
                   <span class="custom-checkbox">
                                      <input type="checkbox" id="selectAll">
                                      <label for="selectAll"></label>
                                  </span>-->
                </th>
                <th>Código</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>     
                <th>Acciones</th> 
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php 
    $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

    $query = "SELECT * FROM store";
    $resultado = mysqli_query($conexion, $query);

     while($fila = mysqli_fetch_assoc($resultado)){
      echo "<tr>";    
      echo "<td>".$fila["codigo"]."</td>";
      echo "<td>".$fila["imagen"]."</td>";
      echo "<td>".$fila["producto"]."</td>";
      echo "<td>".$fila["descripcion"]."</td>";
      echo "<td>".$fila["cantidad"]."</td>";
      echo "<td>".$fila["precio"]."</td>";
      echo "<td><a href='./eliminar_producto.php?id=".$Fila["codigo"]."'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a></td>";     
      echo "</tr>";
    }

    mysqli_close($conexion);
    ?>
               


      <!-- Edit Modal HTML -->
      <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h4 class="modal-title">Añadir item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Código</label>
                  <input type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="file" class="miniatura" id="imagen" placeholder="Subir archivo" required/>
                  </div>
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="email" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Descripción</label>
                  <textarea class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <label>Precio</label>
                  <input type="text" class="form-control" required>
                </div>
              </div>
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Edit Modal HTML -->
      <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
                <div class="modal-body">
                    <div class="form-group">
                      <label>Código</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="file" class="miniatura" id="imagen" placeholder="Subir archivo" required/>
                      </div>
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Descripción</label>
                      <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Precio</label>
                      <input type="text" class="form-control" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                  </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Delete Modal HTML -->
      <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <h4 class="modal-title">Eliminar item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <p>¿Esta seguro/a de querer eliminar este item?</p>
                <p class="text-warning"><small>Está acción no se puede deshacer.</small></p>
              </div>

    <!-- FOOTER
              <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-danger" value="Delete">
              </div>
            </form>
          </div>
        </div>
      </div>     
      END FOOTER-->


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

    <!-- Main Js -->
    <script src="js/gestion.js"></script>
</body>

</html>