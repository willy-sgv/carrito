<?php
$lista = array('alfredo','yhul','eliana','willian','esteward','mayte','deysi','raul','magali','denisse','jerson','zamira','rosilda','aaron','bruno');
$contar = count($lista);
for ($i=0; $i <= 15; $i++) { 
    echo $lista[$i]."<br/>";
}

echo "<br/>";

array_push($lista, "anibal");
/*
$contar = count($lista);
for ($i=0; $i <= $contar; $i++) { 
    echo $lista[$i]."<br/>";
}
*/


$lista2 = array("alfredo"=>40, "yhul");



?>