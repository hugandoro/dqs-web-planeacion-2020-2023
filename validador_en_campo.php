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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="img/escudo.png" alt="" width="50px">
        Alcaldia de Dosquebradas
      </a>
    </div>

  </nav>

  <!-- Page Content -->
  <div class="container">
    <br><br>

    <?php $identificacion = $_POST['identificacion']; ?>

    <?php
      $mysqli = new mysqli("localhost", "root", "", "genus_asistente_pqr");

      if (mysqli_connect_errno()) {
          printf("Falló la conexión: %s\n", mysqli_connect_error());
          exit();
      }

      $consulta = "SELECT * FROM validador_en_campo WHERE identificacion = $identificacion LIMIT 1";

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
          <img src=<?php echo "fotos/" . $fila[10] . ".jpg" ?> style="border-radius: 35px 35px 35px 35px;" alt="" width="150px"><br>
          <hr>
          </center>
        </div>


        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion"><b><?php echo $fila[1] . " " . $fila[2] . " " . $fila[3] . " " . $fila[4]; ?></b></label>
          </center>
        </div>

        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion">CC. <?php echo $fila[0]; ?></label>
          </center>
        </div>

        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion">RH <?php echo $fila[5]; ?></label>
          </center>
        </div>

        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion"><?php echo $fila[6]; ?></label>
          </center>
        </div>

        <div class="col-md-12 mb-12">
          <center>
            <label for="identificacion"><?php echo $fila[7]; ?></label>
          </center>
        </div>

        <?php if ($fila[9] == "AUTORIZADO") { ?>
          <div class="col-md-12 mb-12 alert alert-success">
            <center>
                <h4><strong>Funcionario AUTORIZADO</strong></h4>
            </center>
          </div>
        <?php } ?>

        <?php if ($fila[9] == "NO AUTORIZADO") { ?>
          <div class="col-md-12 mb-12 alert alert-danger">
            <center>
                <h4><strong>Funcionario NO AUTORIZADO</strong></h4>
            </center>
          </div>
        <?php } ?>
                  
      </div>
      <!-- /.row -->
    <?php } else { ?>

      <div class="row">
        <div class="col-md-12 mb-12 alert alert-danger">
            <center>
                <h4><strong>Funcionario NO ENCONTRADO</strong></h4>
            </center>
        </div>
      </div>

    <?php } ?>

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
