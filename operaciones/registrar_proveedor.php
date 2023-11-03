<?php
include "../include/conexion.php";

$ruc = $_POST['ruc'];
$razon_social = $_POST['razon_social'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$metodo_pago = $_POST['metodo_pago'];

$consulta = "INSERT INTO proveedor (ruc, razon_social, correo, telefono, direccion, metodo_pago) VALUES (?,?,?,?,?,?)";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssssss", $ruc, $razon_social, $correo, $telefono, $direccion, $metodo_pago);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            alert('Proveedor registrado exitosamente');
            window.location= '../listados/listado_proveedor.php';
        </script>";
    } else {
        // Hubo un error en la ejecución de la consulta
        echo "<script>
            alert('Fallo el registro, intente nuevamente: " . mysqli_error($conexion) . "');
            window.location= '../listados/listado_proveedores.php';
        </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

?>
