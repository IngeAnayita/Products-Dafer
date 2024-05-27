<div class="modal fade" id="editChildresn<?php echo $dataProducto['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          Modificar datos del producto
        </h6>
      </div>
      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataProducto['id']; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Producto:</label>
            <input type="text" name="producto" class="form-control" value="<?php echo $dataProducto['producto']; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Unidad:</label>
            <input type="text" name="dept_res" class="form-control" value="<?php echo $dataProducto['dept_res']; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad:</label>
            <input type="number" name="cantidad" class="form-control" value="<?php echo $dataProducto['cantidad']; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Precio:</label>
            <input type="number" name="precio" class="form-control" value="<?php echo $dataProducto['precio']; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Proveedor:</label>
            <input type="text" name="proovedor" class="form-control" value="<?php echo $dataProducto['proovedor']; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Adquisición:</label>
            <input type="date" name="fecha_adquisicion" class="form-control" value="<?php echo $dataProducto['fecha_adquisicion']; ?>" required="true">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Actualizar datos</button>
        </div>
      </form>
    </div>
  </div>
</div>
