$(document).ready(function() {
    $('#buscarProductoForm').on('submit', function(event) {
        event.preventDefault();
        var nombreProducto = $('#nombre_producto').val();
        $.ajax({
            url: 'recib_Read.php',
            method: 'POST',
            data: { nombre_producto: nombreProducto },
            success: function(response) {
                $('#resultadosBusqueda').html(response);
            }
        });
    });

    setTimeout(function() {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);

    $('.btnBorrar').click(function(e) {
        e.preventDefault();
        var id = $(this).attr("id");
        var dataString = 'id=' + id;
        url = "recib_Delete.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function(data) {
                window.location.href = "index.php";
                $('#respuesta').html(data);
            }
        });
        return false;
    });
});
