<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Secretaría de Planeación de Dosquebradas - 2020 - 2023">
  <meta name="author" content="">

  <title>Planeación | Dosquebradas</title>

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
      <a class="navbar-brand" href="index.php">
        <img src="img/escudo.png" alt="" width="50px">
        Alcaldia de Dosquebradas
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="https://plandesarrollo.dosquebradas.gov.co">Plan desarrollo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="rendicioncuentas.html">Rendición cuentas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bancoproyectos.html">Banco proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://politicaspublicas.dosquebradas.gov.co">Políticas públicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://pot.dosquebradas.gov.co">POT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="biblioteca_digital.html">Biblioteca digital</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index_estadistica.html">Estadística</a>
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
      <div class="col-lg-4 col-md-4 col-xs-4" align="center">
        <a href="https://plandesarrollo.dosquebradas.gov.co/"><img class="card-img" src="img/plan_desarrollo.png" alt=""></a>
      </div>

      <div class="col-lg-8 col-md-8 col-xs-8">

        <form action="index.php" method="POST">
          <div class="form-group">
            <h3><span class="label label-default">Conoce como van las metas del plan de desarrollo</span></h3>
            <input type="number" min="1" max="448" required class="form-control" id="numeroMeta" name="numeroMeta" aria-describedby="emailHelp" placeholder="N° de actividad / meta a consultar...">
            <small id="ayudaIdentificacion" class="form-text text-muted">Digita el numero de la meta a consultar, de la actividad N° 1 al 448</small>
          </div>
          <button type="submit" class="btn btn-warning btn-block">Consultar</button>
        </form>

      </div>
    </div>

    <br><?php require_once 'consumeServiceMedicionIndicador.php'; ?>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12" align="center">
        <div><a href="https://www.funcionpublica.gov.co/documents/35000242/38598841/Resultados_pnga_2021.pdf/42709c0f-ee16-b018-d02c-b2ade919010e?t=1635550747007"><img src="img/banner_alta_gerencia_2021.jpg" width="100%"></a><hr></div>
      </div>
    </div>

    <br>

    <div class="row" id="direcciones_operativas">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <a href="https://plandesarrollo.dosquebradas.gov.co/"><img class="card-img-top" src="img/plan_desarrollo.png" alt=""></a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <a href="https://politicaspublicas.dosquebradas.gov.co/"><img class="card-img-top" src="img/politicas_publicas.png" alt=""></a>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <br>
          <a href="https://presupuestoparticipativo.dosquebradas.gov.co/"><img class="card-img-top" src="img/boton_presupuesto.png" alt=""></a>
        </div>
      </div>
    </div>
    <!-- /.row -->


    <br>


    <div class="row" id="direcciones_operativas">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="img/uno.jpg" alt="" width="40">
          <div class="card-body">
            <h4 class="card-title">Asuntos Socioeconómicos</h4>
            <p class="card-text"></p>
          </div>
          <!--<div class="card-footer">
            <a href="#" class="btn btn-success">Oferta institucional</a>
          </div>-->
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="img/dos.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Ordenamiento Territorial</h4>
            <p class="card-text"></p>
          </div>
          <!--<div class="card-footer">
            <a href="#" class="btn btn-success">Oferta institucional</a>
          </div>-->
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <a href="index_sistemas_gestion.html"><img class="card-img-top" src="img/tres.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">Sistemas de Gestión</h4>
            <p class="card-text"></p>
          </div>
          <!--<div class="card-footer">
            <a href="#" class="btn btn-success">Oferta institucional</a>
          </div>-->
        </div>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12" align="center">
        <div><a href="https://forms.gle/c92AnBTVQLcQh7me6"><img src="img/sisben_2.jpg" width="100%"></a></div><br>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <img src="img/virtual.jpg" alt="" class = "img-responsive" width="80%">
      </div>

      <div class="col-md-8 mb-8">
        <br>
        <h2>Nuevos canales de atencion virtuales</h2>
        <hr>
        <p><b>Certificados de estratificación y nomenclatura | </b>certificacionesplaneacion@dosquebradas.gov.co </p>
        <p><b>Area de servicios públicos | </b>subsidios@dosquebradas.gov.co</p>
        <p><b>Solicitudes y propuestas para el ajuste del POT | </b>planeacion@dosquebradas.gov.co</p>
        <hr>
      </div>
    </div>

    <!--
    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12" align="center">
        <div><a href="https://plandesarrollo.dosquebradas.gov.co"><img src="img/banner_22102020.jpg" width="100%"></a></div><br>
      </div>
    </div>
    -->

    <div class="row">
      <div class="col-md-8 mb-5">

        <h2>Quienes somos</h2>
        <hr>
        <p>
          Somos la dependencia planificadora del municipio, tanto en materia económica, ambiental, territorial, social y financiera como en materia institucional y administrativa. 
          
          <hr>

          <b>Ejercemos las siguientes funciones...</b>
          </br></br>Cumplimos funciones relacionadas con los procesos de planificación del desarrollo socioeconómico de conformidad con lo establecido en la Constitución Política y ley orgánica de planeación (Ley 152 de 1.994), la elaboración de los planes plurianuales de inversiones publicas y el plan operativo anual de inversiones conforme lo establecen las normas orgánicas del presupuesto y elaborará el presupuesto de inversiones del Municipio de conformidad con los criterios de focalización establecidos por la Constitución y demás normas legales que establecen los criterios aplicables para la libre y forzosa inversión.
          </br></br>Dirigimos la elaboración, modificación, aplicación y seguimiento del plan de ordenamiento territorial y el desarrollo urbano del Municipio.</li>
          </br></br>Nos corresponde la estratificación socioeconómica, los usos del suelo y demás parámetros para el ordenamiento territorial y crecimiento de la ciudad.</li>
          </br></br>Asuminos funciones relacionadas con los sistemas de información para la planificación (financieros, económicos, sociales, de calidad de vida, sisben, la cartografía, población y territorio), especialmente los georeferenciados.</li>
          </br></br>Nos corresponde también el direccionamiento estratégico de la ciudad y de la administración Municipal, el diseño, formulación, desarrollo y la dirección para la implementación de los sistemas de gestión administrativos (sistema de gestión de la calidad, sistema de desarrollo administrativo y sistema de control interno) en los términos y condiciones que señale la ley y las directrices de la función pública.</li>
          </br></br>Asumimos la prestación de los servicios de información y la generación y gestión del conocimiento que se divulgará ampliamente a través de la web de la Administración Municipal.</li>
          </br></br>Identificamos a la población pobre y vulnerable del municipio para la debida clasificación.</li>
               
          <hr>

          <b>En materia ambiental...</b>
          </br></br>Tomamos las medidas necesarias para el control, la preservación y la defensa del medio ambiente en el municipio, en coordinación con la Corporación Autónoma Regional de Risaralda, Carder.</li>
          </br></br>Promovemos, participamos y coordinamos la ejecución de programas y políticas para mantener el ambiente sano.</li>
          </br></br>Coordinamos y dirigimos, con la asesoría de la Corporación Autónoma Regional de Risaralda, Carder, las actividades permanentes de control y vigilancia ambientales, que se realicen en el territorio del municipio.</li>
          </br></br>Coordinamos la ejecución de obras o proyectos de descontaminación de corrientes o depósitos de agua afectados por vertimientos, así como programas de disposición, eliminación y reciclaje de residuos líquidos y sólidos y de control a las emisiones contaminantes del aire.</li>
          </br></br>Promovemos, cofinanciamos  o coordinamis la ejecución, en coordinación con otras entidades publicas comunitarias o privadas, obras y proyectos de irrigación, drenaje, recuperación de tierras defensa contra las inundaciones y regulación de causes y corrientes de agua.</li>
          </br></br>Realizamos las actividades necesarias para el adecuado manejo y el aprovechamiento de cuencas y microcuencas hidrográficas.</li>
          </br></br>Prestamos el servicio de asistencia técnica y realizar transferencia de tecnología en lo relacionado con la defensa del medio ambiente y la protección de los recursos naturales.</li>
        
        </p>
        <a class="btn btn-success btn-lg btn-block" href="http://www.dosquebradas.gov.co/web/">Te invitamos a ingresar al portal web institucional <br><b>www.dosquebradas.gov.co</b></a>

        <hr>
        <h2>Ubicación geografica</h2>
        <hr>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d22489.5996528186!2d-75.67920100790597!3d4.832217943234436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1598986456019!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <hr>

        <a href="https://forms.gle/c92AnBTVQLcQh7me6"><img src="img/sisben_1.jpg" alt="" class = "img-responsive" width="100%"></a>
        <hr>

      </div>

      <div class="col-md-4 mb-5" id="validacion_funcionarios">
        
        <center><a href="https://forms.gle/c92AnBTVQLcQh7me6"><img src="img/logo_sisben.jpg" alt="" class = "img-responsive" width="100%"></a></center><hr>
        <br>

        <form action="validador_en_campo.php" method="POST">
          <div class="form-group">
            <h3><span class="label label-default">Validación de visitadores</span></h3>
            <input type="number" required class="form-control" id="identificacion" name="identificacion" aria-describedby="emailHelp" placeholder="N° de indentificacion del visitador">
            <small id="ayudaIdentificacion" class="form-text text-muted">Consutar si el visitador es un funcionaro autorizado por la Secretaría de Planeación</small>
          </div>
          <button type="submit" class="btn btn-warning btn-block">Realizar verificación</button>
        </form>
            
        <br>
        <hr>

        <form action="validador_encuesta_nueva.php" method="POST">
          <div class="form-group">
            <h3><span class="label label-default">Requiero encuesta nueva ?</span></h3>
            <input type="text" required class="form-control" id="identificacion" name="identificacion" aria-describedby="emailHelp" placeholder="N° de indentificacion">
            <small id="ayudaIdentificacion" class="form-text text-muted">Digite su numero de identificación para verificar si se encuentra en el listado de personas que requieren solicitar una encuesta nueva por cambio de domicilio</small>
          </div>
          <button type="submit" class="btn btn-warning btn-block">Realizar consultar</button>
        </form>
            
        <br>
        <hr>

        <img src="img/banner1.jpg" alt="" class = "img-responsive" width="100%">
        <hr>
        <left><a href="https://plandesarrollo.dosquebradas.gov.co/f2-aprobacion.php"><img src="img/caratula_plan.jpeg" alt="" class = "img-responsive" width="100%"></a></left>
        <hr>
        <center><a href="https://plandesarrollo.dosquebradas.gov.co"><img src="img/plan_desarrollo.png" alt="" class = "img-responsive" width="100%"></a></center>
        <hr>
        <center><br><a href="https://politicaspublicas.dosquebradas.gov.co"><img src="img/politicas_publicas.png" alt="" class = "img-responsive" width="100%"></a></center><br>
        <hr>
        <center><a href="https://presupuestoparticipativo.dosquebradas.gov.co"><img src="img/boton_presupuesto.png" alt="" class = "img-responsive" width="100%"></a></center>
        <hr>
        <center><a href="https://www.dosquebradas.gov.co/web/index.php/about/informes-control-interno/informes-satisfaccion-al-cliente/category/410-informes-de-gestion-evaluacion-y-auditoria"><img src="img/logo_mipg_dosquebradas.png" alt="" class = "img-responsive" width="95%"></a></center>
        <hr>
        <center><a href="bancoproyectos.html"><img src="img/banco_proyectos.png" alt="" class = "img-responsive" width="95%"></a></center>
        <hr>
        <center><a href="https://pot.dosquebradas.gov.co"><img src="img/pot.png" alt="" class = "img-responsive" width="50%"></a></center>
        <hr>

        <h2>Canales de contacto</h2>
        <hr>
        <address>
          <strong>Secretaría de planeación municipal</strong>
          <br>Avenida Simon Bolivar
          <br>CAM - Piso 3
          <br>Dosquebradas - Risaralda (Colombia)
          <br>
        </address>
        <address>
          <abbr title="Phone">Telefono</abbr>
          (+57 6) 3116566 ext 162
          <br>
          <abbr title="Email">Email</abbr>
          <a href="mailto:#">planeacion@dosquebradas.gov.co</a>
        </address>

      </div>

    </div>
    <!-- /.row -->

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
