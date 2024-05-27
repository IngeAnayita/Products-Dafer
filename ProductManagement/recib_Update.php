<?php
include('config.php');

$idProductos = $_REQUEST['id'];
$dept_res = $_REQUEST['dept_res'];
$producto = $_REQUEST['producto'];
$cantidad = $_REQUEST['cantidad'];
$precioNuevo = $_REQUEST['precio'];
$proovedor = $_REQUEST['proovedor'];
$fecha_adquisicion = $_REQUEST['fecha_adquisicion'];

$sqlProducto = "SELECT precio, cantidad FROM productos WHERE id = $idProductos";
$resultProducto = mysqli_query($con, $sqlProducto);
$dataProducto = mysqli_fetch_array($resultProducto);
$precioAntiguo = $dataProducto['precio'];
$cantidadAntigua = $dataProducto['cantidad'];

$precioTotalNuevo = $cantidad * $precioNuevo;

$diferenciaPrecioTotal = $precioTotalNuevo - ($cantidadAntigua * $precioAntiguo);

if ($presupuesto - $diferenciaPrecioTotal < 0) {
    echo "<script>
            alert('No se puede modificar el producto. El nuevo precio total excede el presupuesto disponible.');
            window.location.href = 'index.php';
            </script>";
    exit;
}

$presupuesto -= $diferenciaPrecioTotal;
$valorTotal += $diferenciaPrecioTotal;

$updatePresupuesto = "
    UPDATE presupuesto
    SET presupuesto = $presupuesto, valor_total = $valorTotal
    WHERE id = 1
";
mysqli_query($con, $updatePresupuesto);

$update = "
    UPDATE productos 
    SET 
        dept_res = '$dept_res',
        producto = '$producto',
        cantidad = $cantidad,
        precio = $precioNuevo,
        proovedor = '$proovedor',
        fecha_adquisicion = '$fecha_adquisicion'
    WHERE id = $idProductos
";
$result_update = mysqli_query($con, $update);

if (!$result_update) {
    echo "Error al actualizar el producto: " . mysqli_error($con);
    exit;
}

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";
?>
