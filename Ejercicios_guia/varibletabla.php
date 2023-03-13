<!--Realice un script PHP que muestre mediante la utilización de variables sus datos personales:
nombre completo, lugar de nacimiento (departamento y país, si es extranjero), edad y
Código de Estudiante. Muestre estos datos en una tabla.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Datos personales</h1>
</head>
</html>

<?php

$nombre="Yosselin Roxana Flores García";
$nacimientolugar="San Miguel, El Salvador";
$edad="22 años";
$codigoestudiante="SMIS537818";


$tabla = <<<TABLA
    <table id="datos" border="2">
    <thead style='background-color:#92BAD5;'>
        <tr>\n
            <th>
                Nombre
            </th>\n
            <td class="datos">
                $nombre
            </td>\n
        </tr>\n
        <tr>\n
            <th>
                Lugar de nacimiento 
            </th>\n
            <td class="datos">
                $nacimientolugar
            </td>\n
        </tr>\n
        <tr>\n
            <th>
                Edad 
            </th>\n
            <td class="datos">
                $edad
            </td>\n
        </tr>\n
        <tr>\n
            <th>
                Código del estudiante
            </th>\n
            <td class="datos">
                $codigoestudiante
            </td>\n
        </tr>\n
        </thead>
    </table>\n
TABLA;
    echo $tabla;

?>