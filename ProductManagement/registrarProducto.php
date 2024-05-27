<form name="form-data" action="recibProduct.php" method="POST">
    
    <div class="row">
        <div class="col-md-11">
            <label for="producto" class="form-label">Producto</label>
            <input type="text" class="form-control" name="producto" required='true' autofocus>
        </div>
        <div class="col-md-11">
            <label for="dept_res" class="form-label">Unidad</label>
            <input type="text" class="form-control" name="dept_res" required='true' autofocus>
        </div>
        <div class="col-md-11">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" required='true'>
        </div>
        <div class="col-md-11">
            <label for="precio" class="form-label">Valor unitario</label>
            <input type="number" class="form-control" name="precio" required='true'>
        </div>
        <div class="col-md-11">
            <label for="proovedor" class="form-label">Proovedor</label>
            <input type="text" class="form-control" name="proovedor" required='true' autofocus>
        </div>
        <div class="col-md-11">
        <label for="fecha_adquisicion" class="form-label">Fecha de Adquisicion</label>
        <input type="date" class="form-control" name="fecha_adquisicion" required='true'>
        </div>
    </div>
    <div class="row justify-content-start text-center mt-4">
        <div class="col-11">
            <button class="btn btn-primary btn-block" style="background-color: #844adb;" id="btnEnviar">
                Registrar Producto
            </button>
        </div>
        <div class="col-11 mt-2">
        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#ModalLeer">
        Buscar Producto
        </button>
        </div>
    </div>
</form>
