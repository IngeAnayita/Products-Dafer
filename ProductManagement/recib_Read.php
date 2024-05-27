<?php
include('config.php');

if (isset($_POST['nombre_producto'])) {
    $nombreProducto = $_POST['nombre_producto'];
    
    $sqlBuscarProducto = "SELECT * FROM productos WHERE producto LIKE '%$nombreProducto%'";
    $resultBuscarProducto = mysqli_query($con, $sqlBuscarProducto);

    if (mysqli_num_rows($resultBuscarProducto) > 0) {
        echo '<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Proveedor</th>
                        <th>Fecha de Adquisición</th>
                    </tr>
                </thead>
                <tbody>';
        while ($row = mysqli_fetch_assoc($resultBuscarProducto)) {
            echo '<tr>
                    <td>' . $row['dept_res'] . '</td>
                    <td>' . $row['cantidad'] . '</td>
                    <td>' . $row['precio'] . '</td>
                    <td>' . $row['proovedor'] . '</td>
                    <td>' . $row['fecha_adquisicion'] . '</td>
                    </tr>';
        }
        echo '</tbody>
            </table>';
    } else {
        echo '<p>No se encontraron productos con ese nombre.</p>';
    }
}
?>
