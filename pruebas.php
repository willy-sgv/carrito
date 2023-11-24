<?php

include("include/conexion.php");

$consulta = "SELECT * FROM usuario";
$ejecutar = mysqli_query($conexion, $consulta);
while ($respuesta = mysqli_fetch_array($ejecutar)) {
    # code...
    echo $respuesta['dni']." ", $respuesta['apellidos_nombres']." ", $respuesta['correo']." ", $respuesta['telefono']." ",$respuesta['direccion']." ",$respuesta['fecha_nacimiento']." ",
    $respuesta['password']." ", $respuesta['id_rol']." " ;

}

?>