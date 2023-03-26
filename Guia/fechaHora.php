<?php
//funciones de fecha y hora
//Sintaxis basica:
//date(format,[timestamp]);


//muestra el tiempo actual
echo time();

//Mostrar identificadores de zona horaria disponibles
$identificadores=DateTimeZone::listIdentifiers();

foreach($identificadores as $key=>$valores){
    echo $valores."<br/>";
}


//Establecer zona horaria
$identificador="Pacific/Wake";
date_default_timezone_set($identificador);
echo date_default_timezone_get();


//Ejemplo de cambiar zona horaria
echo "El tiempo en: ". date_default_timezone_get(). "es" . date("H: i: s"). "<br/>";

date_default_timezone_set("Pacific/Wake");
echo "El tiempo en: ". date_default_timezone_get(). "es" . date("H: i: s");


//funcion MKTIME

//mktime(hour, minute, second, month, day, year, is_dst);

//ejemplo
echo mktime(0,0,0,10,13,2025);


?>