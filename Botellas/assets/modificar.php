<?php
include_once('conexion.php');
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$dir = $_POST['dir'];
$tlf = $_POST['tlf'];

    $query = "SELECT COUNT(cedula) as r FROM `clientes` WHERE cedula=$cedula;";

    $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

    if(mysqli_fetch_array($rs)['r']==1){
        $query = "UPDATE `clientes` SET `cedula` = '$cedula', `nombre` = '$nombre', `direccion` = '$dir', `telefono` = '$tlf' WHERE `clientes`.`cedula` = 29505238";
        $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));
        echo 'Modificación completada';
    } else{
        echo 'Error catastrofico';
    }
mysqli_close($conec);
?>