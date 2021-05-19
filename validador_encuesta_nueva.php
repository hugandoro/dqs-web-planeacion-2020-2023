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
  <!-- <img src="img/nota1.png" class="stick1"/> -->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="img/escudo.png" alt="" width="50px">
        Alcaldia de Dosquebradas
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://pot.dosquebradas.gov.co">.::POT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://plandesarrollo.dosquebradas.gov.co">.::Plan Desarrollo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rendicioncuentas.html">.::Rendicion de cuentas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bancoproyectos.html">.::Banco Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="politicas_publicas_portada.html">.::Politicas Públicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="validador.php">.::Validación SISBEN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="bg-success py-1 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">

        <div class="col-lg-3">
          <center><img src="img/logo.png" alt="" width="150px"></center>
        </div>

        <div class="col-lg-9">
          <h1 class="display-4 text-white mt-5 mb-2">Secretaría de planeación municipal</h1>
          <p class="lead mb-5 text-white-50">Dependencia planificadora del municipio, tanto en materia económica, ambiental, territorial, social y financiera como en materia institucional y administrativa.</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-12">
        <center>
          <H5>Alcaldia Municipio de Dosquebradas</H5>
          <img src="img/logo_sisben.jpg" width="200px">
          <hr>
        </center>
      </div>
    </div>

    <?php $identificacion = $_POST['identificacion']; ?>

    <?php
    $mysqli = new mysqli($hostname_sle, $username_sle, $password_sle, $database_sle);

    if (mysqli_connect_errno()) {
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
    }

    $consulta = "SELECT * FROM validador_en_campo WHERE identificacion = $identificacion LIMIT 1";
    echo $identificacion;
    echo "<br>";
    echo $consulta;
    $resultado = $mysqli->query($consulta);
    $fila = $resultado->fetch_row();
    echo $fila[3];

    if ($resultado = $mysqli->query($consulta)) {
      $fila = $resultado->fetch_row();
      $resultado->close();
    }

    $mysqli->close();
    ?>

    <?php if (isset($fila)) { ?>
      <div class="row">

        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion"><b><?php echo $fila[3] . " " . $fila[4] . " " . $fila[5]; ?></b></label>
          </center>
        </div>

        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion"><?php echo $fila[1]; ?> - <?php echo $fila[2]; ?></label>
          </center>
        </div>

        <div class="col-md-12 mb-12"><br></div>

        <div class="col-md-12 mb-12 alert alert-danger">
          <center>
            <h4><strong>Este usuario debe solicitar encuesta nueva por cambio domicilio</strong></h4>
          </center>
        </div>

        <div class="col-md-12 mb-12"><br></div>


      </div>

    <?php } else { ?>

      <div class="row">
        <div class="col-md-12 mb-12 alert alert-info">
          <center>
            <h4><strong>Usuario NO encontrado</strong></h4>
          </center>
        </div>
      </div>

    <?php } ?>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Alcaldia Municipio de Dosquebradas 2020 - 2023</p>
      <p class="m-0 text-center text-white"><a href='https://www.freepik.es'>Creditos imagenes - www.freepik.es</a></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>