<?php
include("../include/conexion.php");

$serieVenta=$_POST['serie_venta'];
$numeroVenta=$_POST['numero_venta'];
$fechaHoraVenta=$_POST['fecha_hora_venta'];
$montoTotal=$_POST['monto_total'];
$cliente=$_POST['id_cliente'];
$usuario=$_POST['id_usuario'];




$consulta="INSERT INTO ventas (serie_venta, numero_venta, fecha_hora_venta, monto_total, id_cliente, id_usuario) 
            VALUES ('$serieVenta','$numeroVenta','$fechaHoraVenta','$montoTotal','$cliente','$usuario')";



$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>