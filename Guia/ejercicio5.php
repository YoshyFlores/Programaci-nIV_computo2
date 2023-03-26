<?php

//arreglo numerico
$nombre =array("Jose", "Sofia", "Andrea", "Alberto");

//accediendo directamente al indice
echo $nombres[0];
echo $nombres[1];
echo $nombres[2];


//arreglo numerico-recorriendo
$nombres= array("Jose", "Sofia", "Andrea", "Alberto");

//recorriendo con un bucle
foreach($nombres as $key){
    echo $key. "<br/>";
}

//arreglo numerico-recorriendo
$nombres= array("Jose", "Sofia", "Andrea", "Alberto");

//recorriendo con un bucle
for($i=0; $i<$nombres;$i++):
    echo $nombres[$i]. "<br/>";
endfor;

?>