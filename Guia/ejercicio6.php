<?php

//arreglo asociativo
$multipleColors= array(
    "Jose"=> array("Azul", "Rojo", "Verde"),
    "Sofia"=>array("Violeta", "Rosado")
);

echo "<h2>Jose</h2>";
echo $multipleColors["Jose"][0]."<br/>";
echo $multipleColors["Jose"][1]."<br/>";
echo $multipleColors["Jose"][2]."<br/>";


//array asociativo
$multipleColors=array(
    "Jose"=> array("Azul", "Rojo", "Verde"),
    "Sofia"=>array("Violeta", "Rosado")
);

foreach($multipleColors as $nombre=>$values){
    echo "<h2>$nombre</h2><b>Le gustan los colores</b><br/>";
    foreach ($values as $colores):
        echo $colores . "<br/>";
    endforeach;
}

//array multidimencional
$multiNumerico=array(
    array("Jose", "Andrea", "Carmen"),
    array (22, 35, 18),
    array("Masculino", "Femenino", "Femenino")
);

//recorrer array
echo "Nombre: " .$multiNumerico[0][0] ."<br/>";
echo "Edad: " .$multiNumerico[1][0] ."<br/>";
echo "Sexo: " .$multiNumerico[2][0] ."<br/>";


//array multidimencional numerico
$multiNumerico=array(
    array("Jose", "Andrea", "Carmen"),
    array (22, 35, 18),
    array("Masculino", "Femenino", "Femenino")
);

//recorrer array
foreach($multiNumerico as $key => $value){
    foreach($value as $datos):
        echo $datos. "<br/>";
    endforeach;
}


//array multidimencional numerico
$multiNumerico=array(
    array("Jose", "Andrea", "Carmen"),
    array (22, 35, 18),
    array("Masculino", "Femenino", "Femenino")
);
//recorrer el array
for($i=0; $i<count($multiNumerico);$i++){
    echo "<br/>Fila:". $i ."<br/>";
    for($j=0; $j<count($multiNumerico[$i]);$j++){
    echo $multiNumerico[$i][$j] ,"<br/>";

}
}


//array multidimensional numerico
$asoc=array(
    "Jose"=>array(22,"Masculino"),
    "Andrea"=>array(35, "Femenino"),
    "Carmen"=>array(18, "Femenino")
);

//recorrer array
foreach($asoc as $key=>$values){
    echo "<b>$key</b><br/>";
    foreach($values as $datos){
        echo $datos. "<br/>";
    }
}


//array multidimensional numerico
$asoc=array(
    "Jose"=>array("edad"=>22,"sexo"=>"Masculino"),
    "Andrea"=>array("edad"=>35, "sexo"=> "Femenino"),
    "Carmen"=>array("edad"=>18, "sexo"=> "Femenino")
);

//recorrer array
foreach($asoc as $key=>$values){
    echo "<br/><b>$key</b><br/>";
    foreach($values as $key2=>$datos){
        echo "<b>" .$key2 .":</b>";
        echo $datos . "<br/>";
    }
}
?>