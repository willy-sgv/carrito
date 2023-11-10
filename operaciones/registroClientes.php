<?php
include("../include/conexion.php");

$dniRuc=$_POST['dniRuc'];
$razonSocial=$_POST['razonSocial'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$direccionEnvio=$_POST['direccionEnvio'];




$consulta="INSERT INTO cliente (ruc_dni, razon_social, telefono, correo, direccion, direccion_envio) 
            VALUES ('$dniRuc','$razonSocial','$telefono','$correo','$direccion','$direccionEnvio')";



$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>