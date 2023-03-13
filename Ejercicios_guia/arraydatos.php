<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Datos en tabla de un array dado</h1>
</head>
</html>
<?php

$datos = array(
    array(
        "nombre" => "Francisco Garcia",
        "telefono" => "5689741523",
        "correo" => "fgarcia@gmail.com",
    ),
    array(
        "nombre" => "Manuel Salinas",
        "telefono" => "2584369721",
        "correo" => "msalinas@gmail.com",
    ),
    array(
        "nombre" => "Johana Melara",
        "telefono" => "9875147536",
        "correo" => "jmelara@gmail.com",
    )
);

$s = '<table border="2" style= "background-color:pink">';
foreach ( $datos as $r ) {
    $s .= '<tr>';
    foreach ( $r as $v ) {
            $s .= '<td>'.$v.'</td>';
    }
    $s .= '</tr>';
}
$s .= '</table>';
echo $s;

?>
