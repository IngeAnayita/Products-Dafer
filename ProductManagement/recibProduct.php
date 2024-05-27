<?php
include('config.php');

$dept_res = $_REQUEST['dept_res'];
$producto = $_REQUEST['producto'];
$cantidad = $_REQUEST['cantidad'];
$precioUnitario = $_REQUEST['precio'];
$proovedor = $_REQUEST['proovedor'];
$fecha_adquisicion = $_REQUEST['fecha_adquisicion'];

$precioTotal = $cantidad * $precioUnitario;

$sqlPresupuesto = "SELECT presupuesto, valor_total FROM presupuesto WHERE id = 1";
$resultPresupuesto = mysqli_query($con, $sqlPresupuesto);
$dataPresupuesto = mysqli_fetch_array($resultPresupuesto);
$presupuesto = $dataPresupuesto['presupuesto'];
$valorTotal = $dataPresupuesto['valor_total'];

if ($presupuesto - $precioTotal < 0) {
    echo "<script>
            alert('No se puede agregar el producto. El precio total excede el presupuesto disponible.');
            window.location.href = 'index.php';
            </script>";
    exit;
}

$presupuesto -= $precioTotal;
$valorTotal += $precioTotal;

$updatePresupuesto = "
    UPDATE presupuesto
    SET presupuesto = $presupuesto, valor_total = $valorTotal
    WHERE id = 1
";
mysqli_query($con, $updatePresupuesto);

$QueryInsert = "
    INSERT INTO productos (
        dept_res,
        producto,
        cantidad,
        precio,
        proovedor,
        fecha_adquisicion
    ) VALUES (
        '$dept_res',
        '$producto',
        '$cantidad',
        $precioUnitario,
        '$proovedor',
        '$fecha_adquisicion'
    )
";

$inserInmueble = mysqli_query($con, $QueryInsert);

header("Location: index.php");
?>
