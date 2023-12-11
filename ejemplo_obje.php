<?php 
$lista = array('Alfredo','Yul','Eliana','Willian','Steward','Mayte','Deisy','Raul','Zamira','Bruno','Rosilda','Jerson','Denisse','Edwin','Magaly');
$contar = count($lista);
print_r($lista);

array_push($lista , "anibal");
$contar = count($lista);
print_r($lista);
/*for ($i=0; $i <= $contar; $i++) { 

    echo $lista[$i]."<br>";

}*/
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$lista2 = array("mayte"=>35,"rosy"=>34);



include('include/conexion.php');

$lista3 = array();

$consulta = "SELECT * FROM producto";
$ejecutar = mysqli_query($conexion, $consulta);
while ($r_ejecutar = mysqli_fetch_array($ejecutar)) {
    $lista3[$r_ejecutar['id']]= $r_ejecutar['descripcion'];  
 
}

print_r($lista3);

?>