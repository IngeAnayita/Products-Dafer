<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="image/x-icon" rel="shortcut icon" href="img/Cajita.png" />
  <title>Products Dafer</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #844adb !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php">
          <img src="img/Logo.png" alt="Gestion de Productos" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Gestión de Productos... <span style="background-color: #844adb" !important;>&#160;</span></h5>
    </div>
  </nav>

  <div class="container mt-5 p-5">
    <?php
    include('config.php');
    $sqlProducto = "SELECT * FROM productos ORDER BY id DESC";
    $queryProducto = mysqli_query($con, $sqlProducto);
    $cantidad = mysqli_num_rows($queryProducto);
    ?>

    <h4 class="text-center">
      Gestión de productos
    </h4>
    <hr>

    <div class="row text-center" style="background-color: #BD9DEB">
      <div class="col-md-6">
        <strong style="color: #FFFFFF !important;">Registrar Nuevo producto</strong>
      </div>
      <div class="col-md-6">
        <strong style="color: #FFFFFF !important;">Lista de productos <span style="color: #FF0000"> (<?php echo $cantidad; ?>)</span></strong>
      </div>
    </div>

    <div class="row text-center" style="background-color: #BD9DEB; margin-top: 10px;">
      <div class="col-md-6">
        <strong style="color: #FFFFFF !important;">Presupuesto: <?php echo $presupuesto; ?></strong>
      </div>
      <div class="col-md-6">
        <strong style="color: #FFFFFF !important;">Valor Total: <?php echo $valorTotal; ?></strong>
      </div>
    </div>

    <div class="row clearfix">
      <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12">
        <div class="body">
          <div class="row clearfix">
            <div class="col-sm-5">
              <?php include('registrarProducto.php'); ?>
            </div>
            <div class="col-sm-7">
              <div class="row">
                <div class="col-md-13 p-2">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Producto</th>
                          <th scope="col">Unidad</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col">Precio</th>
                          <th scope="col">Proovedor</th>
                          <th scope="col">Fecha adquisición</th>
                          <th scope="col">Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($dataProducto = mysqli_fetch_array($queryProducto)) { ?>
                          <tr>
                            <td><?php echo $dataProducto['producto']; ?></td>
                            <td><?php echo $dataProducto['dept_res']; ?></td>
                            <td><?php echo $dataProducto['cantidad']; ?></td>
                            <td><?php echo $dataProducto['precio']; ?></td>
                            <td><?php echo $dataProducto['proovedor']; ?></td>
                            <td><?php echo $dataProducto['fecha_adquisicion']; ?></td>
                            <td>
                              <button type="button" class="btn btn-danger" style="background-color: #FF0000;" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataProducto['id']; ?>">
                                Eliminar
                              </button>
                              <div class="mt-2">
                                <button type="button" class="btn btn-primary" style="background-color: #844adb;" data-toggle="modal" data-target="#editChildresn<?php echo $dataProducto['id']; ?>">
                                  Modificar
                                </button>
                              </div>
                            </td>
                          </tr>
                          <?php include('ModalLeer.php'); ?>
                          <?php include('ModalEditar.php'); ?>
                          <?php include('ModalEliminar.php'); ?>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>