<?php
// crear variables para base de datos
 
$servidor = "localhost";
$db = "carrito_ventas";
$usuario = "root";
$password = "root";

$conexion = mysqli_connect($servidor, $usuario, $password, $db);

// Verificar la conexion

if (!$conexion) {
    echo "conexion fallida";
}


?>