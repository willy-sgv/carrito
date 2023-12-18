<?php
include("../include/conexion.php");

$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$detalle=$_POST['detalle'];
$categoria=$_POST['id_categoria'];
$precioCompra=$_POST['precio_compra'];
$precioVenta=$_POST['precio_venta'];
$stock=$_POST['stock'];
$estado =$_POST['estado'];
$proveedor =$_POST['id_proveedor'];

$nombre_archivo = $codigo.".jpg";
$ruta_foto = "../img_productos/".$nombre_archivo;

//$pass_secure = password_hash($dni, PASSWORD_DEFAULT);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_foto)) {

    $consulta="INSERT INTO producto (codigo, descripcion, detalle, id_categoria, precio_compra, precio_venta, stock, estado, imagen, id_proveedor) 
            VALUES ('$codigo','$descripcion','$detalle', '$categoria', '$precioCompra','$precioVenta','$stock','$estado','$nombre_archivo', '$proveedor')";



$ejecutar = mysqli_query($conexion, $consulta);

if($ejecutar){
    echo "Registro exitoso";
}else{
    echo "error";
}
}else {
   "error al suir la foto";
}
?>