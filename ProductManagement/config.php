<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "gestionproductos";
$con = mysqli_connect($servidor, $usuario, $password) or die("No se ha podido conectar al Servidor");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $basededatos) or die("Upps! Error en conectar a la Base de Datos");

$sqlPresupuesto = "SELECT presupuesto, valor_total FROM presupuesto WHERE id = 1";
$resultPresupuesto = mysqli_query($con, $sqlPresupuesto);
$dataPresupuesto = mysqli_fetch_array($resultPresupuesto);
$presupuesto = $dataPresupuesto['presupuesto'];
$valorTotal = $dataPresupuesto['valor_total'];
?>