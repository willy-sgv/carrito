<?php 
$server ="localhost";
$user= "root";
$pass="root";
$db="carrito_2";

$conexion = mysqli_connect($server, $user, $pass,$db);

if (!$conexion){
    echo"conectado en falla";
}

?>