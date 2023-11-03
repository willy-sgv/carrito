<?php
include "../include/conexion.php";

$dni = $_POST['dni'];
$apellidos_nombres = $_POST['nombres_apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_rol = $_POST['id_rol'];


$nombreImagen = $_FILES['fotos']['name'];
$nombreTempImagen = $_FILES['fotos']['tmp_name']; 

$carpetaDestino = "../imagen/";
$rutaImagen = $carpetaDestino . $nombreImagen;

if (move_uploaded_file($nombreTempImagen, $rutaImagen)) {
    $password_encriptada = password_hash($dni, PASSWORD_DEFAULT);

    $consulta = "INSERT INTO usuario (dni, apellidos_nombres, correo, telefono, direccion, fecha_nacimiento, password, activo, reset_password, token_password, id_rol, fotos) VALUES ('$dni', '$apellidos_nombres', '$correo', '$telefono', '$direccion', '$fecha_nacimiento', '$password_encriptada', 1, 0, ' ', $id_rol, '$nombreImagen')";
    $ejecutar_insertar = mysqli_query($conexion, $consulta);

if ($ejecutar_insertar) {
    echo "<script>
        alert('Usuario registrado exitosamente');
        window.location= '../listados/listado_usuarios.php?id=" . mysqli_insert_id($conexion) . "';
    </script>";
} else {
    echo "<script>
        alert('Error al registrar, por favor verifique sus datos: " . mysqli_error($conexion) . "');
        window.history.back();
    </script>";
}}
?>
