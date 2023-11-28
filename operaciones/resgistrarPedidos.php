<?php
include("../include/conexion.php");

$cliente=$_POST['id_cliente'];
$fechaHoraVenta=$_POST['fecha_hora_pedido'];
$echaEntrega=$_POST['fecha_entrega'];
$metodoPago=$_POST['metodo_pago'];
$monto=$_POST['monto'];
$comprobante=$_POST['comprobante'];
$estado=$_POST['estado'];



$consulta="INSERT INTO pedidos (id_cliente, fecha_hora_pedido, fecha_entrega, metodo_pago, monto, comprobante, estado) 
            VALUES ('$cliente','$fechaHoraVenta','$echaEntrega','$metodoPago','$monto','$comprobante','$estado')";



$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}

?>