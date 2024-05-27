<?php
include('config.php');

$idProducto = $_REQUEST['id'];

$sqlProducto = "SELECT precio, cantidad FROM productos WHERE id = $idProducto";
$resultProducto = mysqli_query($con, $sqlProducto);
$dataProducto = mysqli_fetch_array($resultProducto);
$precioUnitario = $dataProducto['precio'];
$cantidad = $dataProducto['cantidad'];

$precioTotalEliminar = $precioUnitario * $cantidad;

$presupuesto += $precioTotalEliminar;
$valorTotal -= $precioTotalEliminar;

$updatePresupuesto = "
    UPDATE presupuesto
    SET presupuesto = $presupuesto, valor_total = $valorTotal
    WHERE id = 1
";
mysqli_query($con, $updatePresupuesto);

$sqlDeleteProducto = "DELETE FROM productos WHERE id = $idProducto";
mysqli_query($con, $sqlDeleteProducto);

header("Location: index.php");
?>
