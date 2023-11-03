<?php
    $servidor = "localhost";
    $db = "carrito_2";
    $usuario = "root";
    $password = "root";

    $conexion = mysqli_connect($servidor, $usuario, $password, $db);

    if (!$conexion){
        echo "conexion fallida";
    
    }

?>