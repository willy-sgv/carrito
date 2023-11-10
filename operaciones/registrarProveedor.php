<?php
include("../include/conexion.php");

$ruc=$_POST['ruc'];
$razonSocial=$_POST['razonSocial'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$metodoPago=$_POST['metodoPago'];



    $consulta="INSERT INTO proveedor (ruc, razon_social, correo, telefono, direccion, metodo_pago) 
            VALUES ('$ruc','$razonSocial','$email','$telefono','$direccion','$metodoPago')";



$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>