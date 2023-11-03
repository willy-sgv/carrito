<?php
include "../include/conexion.php";

$ruc_dni = $_POST['ruc_dni'];
$razon_social = $_POST['razon_social'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$direccion_envio = $_POST['direccion_envio'];

$consulta = "INSERT INTO cliente (ruc_dni, razon_social, telefono, correo, direccion, direccion_envio) VALUES (?,?,?,?,?,?)";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "ssssss", $ruc_dni, $razon_social, $telefono, $correo, $direccion, $direccion_envio);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>
            alert('Proveedor registrado exitosamente');
            window.location= '../listados/listado_clientes.php';
        </script>";
    } else {
        // Hubo un error en la ejecución de la consulta
        echo "<script>
            alert('Fallo el registro, intente nuevamente: " . mysqli_error($conexion) . "');
            window.location= '../listados/listado_clientes.php';
        </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

?>
