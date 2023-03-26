<?php

//variables
$var="Valor";


$cantidad=5;
$precio=3;
$importe=$cantidad*$precio;

//nombres aceptables de las variables
$variable;
$mivariable;
$Variable;
$MiVariableLarga;
$lugar1="Buenos aires";
$_lugar_2="Mexico";


//Interpretación de las variables
$comillasDobles="Texto entre comillas dobles, puede contener 'comillas simples' dentro sin problemas";
$comillasSimples='Texto entre comillas simples, puede contener "comillas dobles" pero sin variblaes dentro, porque usa comillas simples para delimitar el inicio y el fin del bloque';
$escapeSencillo="Texto con \ 'comillas\'simples escapadas";
$escapeDoble="Texto con \"comillas\" dobles escapadas";
$variablesDobles = "Texto con variables como $nombre y $apellido intercaladas entre comillas dobles, que se reemplazarán por su valor";


//Concatenación
$nombre = 'Pepe';
$concatenacion = '<p id="saludo">Hola '. $nombre.'</p>';
//Entre una variable y otra variable
$nombre = 'Juan';
$apellido = 'Perez';
$concatenacion = '<p>Su nombre y apellido es '.$nombre.$apellido.'</p>';

//Constantes 
define ("PI", 3.1415926);
define ("BR", "<br />");
define ("LIBRO", "PHP 6");
print(PI);
print(BR);

?>