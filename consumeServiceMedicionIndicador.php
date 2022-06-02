<?php
// Valida que se este recibiendo un numero de meta para consultar
if (isset($_POST['numeroMeta'])){
    // Limpiar cache SOAP WSDL
    ini_set("soap.wsdl_cache_enabled", "0");

    // Ruta del WSDL endpoint
    $url = "https://estrategov.genusgroupsas.com/dosquebradas/soap-webservice/serviceMedicionIndicador.php?wsdl";

    try {
        $client = new SoapClient($url, ["trace" => 1]);

        // Pasar los parametros del llamado del servicio a un array
        $numeral = $_POST['numeroMeta']; // N° de meta a consultar
        $parameters = array('numeral' => $numeral);

        $result = $client->functionServiceSOAP($parameters);
    } catch (SoapFault $e) {
        echo $e->getMessage();
    }

    $linea = $result->linea_nombre;
    $programa = $result->programa_nombre;
    $proyecto = $result->proyecto_nombre;
    $meta = $result->actividad_nombre;
    $numero_meta = $result->actividad_numeral;
    $porcentaje_realizado = round($result->porcentaje_realizado,3);
    $dependencia_responsable = $result->dependencia_responsable;

    echo "
    <div class='row'>
    <div class='col-lg-12 col-md-12 col-xs-12' align='center'>
      <table class='table'>
        <tr>
          <td><b>Meta N°</b></td>
          <td><b>Linea</b></td>
          <td><b>Programa</b></td>
          <td><b>Proyecto</b></td>
          <td><b>Meta</b></td>
          <td><b>Responsable</b></td>
          <td><b>Cumplimiento cuatrienio</b></td>
        </tr>

        <tr>
          <td style='font-size:28px'>$numero_meta</td>
          <td style='font-size:11px'>$linea</td>
          <td style='font-size:11px'>$programa</td>
          <td style='font-size:11px'>$proyecto</td>
          <td style='font-size:11px'>$meta</td>
          <td style='font-size:11px'>$dependencia_responsable</td>
          <td style='font-size:28px'>$porcentaje_realizado %</td>
        </tr>
      </table>
    </div>
  </div>";

  echo PHP_EOL;
}
