<?php
include_once('conexion.php');
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$dir = $_POST['dir'];
$tlf = $_POST['tlf'];

    $query = "SELECT COUNT(cedula) as r FROM `clientes` WHERE cedula=$cedula;";

    $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

    if(!mysqli_fetch_array($rs)['r']==1){
        $query = "INSERT INTO `clientes` (`cedula`, `nombre`, `direccion`, `telefono`) VALUES ('$cedula', '$nombre', '$dir', '$tlf')";
        $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));
        echo 'Registro completado';
    } else{
        echo 'Ya existe la cedula';
    }
mysqli_close($conec);
?>