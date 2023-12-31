

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Calculadora de Área de Triángulo</title>
<!-- Enlaces a estilos y bibliotecas externas -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    table {
        background-color: burlywood;
        border-collapse: collapse;
        width: 100%;
    }


    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 2px solid #ddd;
    }
</style>


</head>
<body style="background-color: antiquewhite;">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Formulario para ingresar altura y base -->
    <div style="width: 75vh; background-color: burlywood; padding: 1vh; position: absolute; top:25%; left: 25%; ">
        <h1>Registro de cliente</h1>
        <form id="area-form">
            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula:</label>
                <input type="number" class="form-control" id="cedula" name="cedula">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono:</label>
                <input type="number" class="form-control" id="telefono" name="telefono">
            </div>
            <!-- Botón para calcular -->
            <button type="button" class="btn btn-primary" id="registrar-btn">Calcular</button>
            <a href="main.php">Registro de pedido</a>
            <a href="gestion.php">Gestionar clientes</a>
        </form>
        
        <!-- Contenedor para mostrar los registros -->
        <div class="container" id="resultado">
           
        </div>
    </div>
    <!-- Contenedor para mostrar el resultado -->





<!-- Script para realizar la solicitud AJAX -->
<script>
    document.getElementById('registrar-btn').addEventListener('click', function() {
    var cedula = parseFloat(document.getElementById('cedula').value);
    var nombre = document.getElementById('nombre').value;
    var dir = document.getElementById('direccion').value;
    var tlf = document.getElementById('telefono').value;
    if (!isNaN(cedula) && !isNaN(tlf)) {
        var parametros = {"cedula": cedula, "nombre": nombre, "dir":dir, "tlf":tlf};
        $.ajax({
            url: "assets/registrar.php",
            type: "post",
            data: parametros,
        beforeSend: function() {
            $("#resultado").html("Procesando, espere por favor...");
        },
        success: function(response) {
            $("#resultado").html(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            $("#resultado").html("Error al realizar el cálculo");
        }        
        });
    } else {
        
        $("#resultado").html("Por favor, ingrese valores numéricos válidos.");
}
});
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html
