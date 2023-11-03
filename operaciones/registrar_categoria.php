<?php
include "../include/conexion.php";

$nombre = $_POST['nombre'];


$consulta = "INSERT INTO categoria (nombre) VALUES (?)";

if ($stmt = mysqli_prepare($conexion, $consulta)) {
    mysqli_stmt_bind_param($stmt, "s", $nombre);

    if (mysqli_stmt_execute($stmt)) {

        echo "<script>
        alert('Usuario registrado exitosamente');
        window.location= '../listados/listado_categoria.php?id=" . mysqli_insert_id($conexion) . "';
    </script>";
    } else {
        // Hubo un error en la ejecución de la consulta
        echo "<script>
        alert('Fallo el registro, intente nuevamente');
        window.location= '../listados/listado_categoria.php?id=" . mysqli_insert_id($conexion) . "';
    </script>";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

?>
