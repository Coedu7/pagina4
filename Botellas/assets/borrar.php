<?php
include_once('conexion.php');
$cedula = $_POST['cedula'];

    $query = "SELECT COUNT(cedula) as r FROM `clientes` WHERE cedula=$cedula;";

    $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec)); //recordset ($rs)

    if(mysqli_fetch_array($rs)['r']==1){
        $query = "DELETE FROM clientes WHERE `clientes`.`cedula` = $cedula";
        $rs = mysqli_query($conec, $query) or die('Error: ' . mysqli_error($conec));
        echo 'Borrado completado';
    } else{
        echo 'Error catastrofico';
    }
mysqli_close($conec);
?>
