<?php
include "../include/conexion.php";

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$detalle = $_POST['detalle'];
$categoria = $_POST['categoria'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$stock = $_POST['stock'];
$estado = $_POST['estado'];
$proveedor = $_POST['proveedor'];

// Ruta de la carpeta de imágenes
$carpetaImagen = "../imagen/";

// Información de la imagen
$nombreImagen = $_FILES['imagen']['name'];
$nombreTempImagen = $_FILES['imagen']['tmp_name'];

// Mueve la imagen a la carpeta de destino
$rutaImagen = $carpetaImagen . $nombreImagen;
move_uploaded_file($nombreTempImagen, $rutaImagen);

$consulta = "INSERT INTO producto (codigo, descripcion, detalle, precio_compra, precio_venta, stock, estado, imagen, id_categoria, id_proveedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, (SELECT id FROM categoria WHERE nombre = ?), (SELECT id FROM proveedor WHERE razon_social = ?))";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssssssssss", $codigo, $descripcion, $detalle, $precio_compra, $precio_venta, $stock, $estado, $nombreImagen, $categoria, $proveedor);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            alert('Producto registrado exitosamente');
            window.location= '../listados/listado_productos.php';
        </script>";
    } else {
        // Hubo un error en la ejecución de la consulta
        echo "<script>
            alert('Fallo el registro, intente nuevamente: " . mysqli_error($conexion) . "');
            window.history.back();
        </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
