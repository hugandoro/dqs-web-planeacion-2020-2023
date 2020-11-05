<?php require_once('bd/sle.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Planeacion | Dosquebradas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>
  
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-12">
        <center>
          <H2>Alcaldia Municipio de Dosquebradas</H2>
          <img src="img/escudo.png" alt="" width="70px">
          <img src="img/logotipo_pie.png" alt="" width="100px">
        </center>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 mb-3"></div>

      <div class="col-md-6 mb-6">

        <center>
        <hr>
        <form action="validador_en_campo.php" method="POST">
          <div class="form-group">
            <h3><span class="label label-default">Validacion de visitadores</span></h3>
            <input type="number" class="form-control" id="identificacion" name="identificacion" aria-describedby="emailHelp" placeholder="N° de indentificacion del visitador">
            <small id="ayudaIdentificacion" class="form-text text-muted">Consutar si el visitador es un funcionaro autorizado por la Secretaria de Planeacion</small>
          </div>
          <button type="submit" class="btn btn-warning btn-block">Consultar...</button>
        </form>
        <hr>
        </center>

      </div>
      <div class="col-md-3 mb-3"></div>

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">

      <p class="m-0 text-center text-white">Alcaldia Municipio de Dosquebradas 2020 - 2023</p>
      <p class="m-0 text-center text-white">Avenida Simon Bolivar | CAM - Piso 3 | Dosquebradas - Risaralda (Colombia)</p>
      <p class="m-0 text-center text-white"><abbr title="Phone">Telefono</abbr> (+57 6) 3116566 ext 162</p>
      <p class="m-0 text-center text-white"><abbr title="Email">Email</abbr> <a href="mailto:#">planeacion@dosquebradas.gov.co</a></p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>