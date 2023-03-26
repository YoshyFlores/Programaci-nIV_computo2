<?php
//for loop
for($i=0; $i<=0; $i++){
    echo "Ciclo actual: ".$i. "<br/>";
}

//while loop
$x=15;

while($x<25):
    echo "While se repite <br/>";
    $x++;//incremento
endwhile;


//do while
$x=15;
do{
    echo "While se repite al menos una vez <br/>";
    $x++;
}while($x<25);


//foreach
$valores = array(5,9,8, "Hola", "Andrea");
foreach($valores as $key):
    echo $key. "<br/>";
endforeach;

?>