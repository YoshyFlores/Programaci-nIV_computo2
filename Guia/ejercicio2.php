<?php
//Condicional if

$valor=20;
if (18>$valor) { echo "Hola";}else{ echo "Adios";}

if ($_POST["password"]=="superagente86") {
echo "<h1>Bienvenidol</h1>";}

//ejemplo Else if
$clima="sol";
if ($clima == "lluvia") {
    echo "Llevar paraguas";
    } else {
    echo "No llevar paraguas";}
    

$dia="jueves";
switch ($día){
    case "lunes":
    $texto = "¡Feliz día Lunes!";
    break;
    case "martes":
    $texto = "¡Feliz día Martes!";
    break;
    case "miercoles":
    $texto = "¡Feliz día Miercoles!";
    break;
    case "jueves":
    $texto = "¡Feliz día Jueves!";
    break;
    case "viernes":
    $texto = "¡Feliz día Viernes!";
    break;
    case "sabado":
    $texto = "¡Feliz día Sabado!";
    break;
    case "Domingo":
    $texto = "¡Feliz día Domingo!";
    break;
}
print ($texto);
?>