<div class="modal fade" id="deleteChildresn<?php echo $dataProducto['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #FF0000 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
          ¿Seguro que desea eliminar el producto?
        </h6>
      </div>
      <form method="POST" action="recib_Delete.php">
        <input type="hidden" name="id" value="<?php echo $dataProducto['id']; ?>">
        <div class="modal-body" id="cont_modal">
          <strong><?php echo $dataProducto['producto']; ?></strong>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>
