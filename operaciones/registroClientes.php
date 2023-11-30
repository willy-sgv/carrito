<?php
include("../include/conexion.php");

$dniRuc=$_POST['ruc_dni'];
$razonSocial=$_POST['razon_social'];
$telefono=$_POST['telefono'];
$correo=$_POST['telefono'];
$direccion=$_POST['direccion'];
$direccionEnvio=$_POST['direccion_envio'];




$consulta="INSERT INTO cliente (ruc_dni, razon_social, telefono, correo, direccion, direccion_envio) 
            VALUES ('$dniRuc','$razonSocial','$telefono','$correo','$direccion','$direccionEnvio')";



$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>