<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Embotelladora de agua</title>
<!-- Enlaces a estilos y bibliotecas externas -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>

</style>
</head>
<body style="background-color: antiquewhite;">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Formulario para ingresar altura y base -->
    <div style="width: 75vh; background-color: burlywood; padding: 1vh; position: absolute; top:25%; left: 25%; ">
        <h1>Inicio de sesión</h1>
        <form id="area-form">
            <div class="mb-3">
                <label for="cedula" class="form-label">Cedula:</label>
                <input type="number" class="form-control" id="cedula" name="cedula">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña:</label>
                <input type="text" class="form-control" id="pass" name="Contraseña">
            </div>
            <!-- Botón para calcular -->
            <button type="button" class="btn btn-primary" id="ingresar-btn" onclick="login()">Ingresar</button>
        </form>
    </div>
    <!-- Contenedor para mostrar el resultado -->

    <div class="modal" id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Datos incorrectos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Pruebe con Cedula: 29505238. Contraseña: urbe123</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<!-- Script para realizar la solicitud AJAX -->
<script>

    function login(){
        var user = document.querySelector("#cedula").value;
        var pass = document.querySelector("#pass").value;
        if (user=="29505238"&&pass=="urbe123") {
            location.href="main.php";
        } else {
            var modal1 = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal1.toggle();
            console.log("hola?");
        }
        console.log(user);
        console.log(pass);



    }

</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>