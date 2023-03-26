<?php


//funcion colores, tendra un valor predeterminado verde
function colores($color="verde"){
    return "<p>Su color favorito es: $color</p>";
}

//Pasamos un valor como argumento
echo colores("Azul");

//Sino se pasa un valor como argumento 
//Tomara el valor por defecto 
echo colores();


//Funciones por valor
function saludo($nombre){
    $nombre .=", Buenos días";
}
$nombre="Sofia Flores";
saludo($nombre);
echo $nombre;




//Declaramos un arreglo llamado fruta
$fruta=array("manzana", "uva", "pera");

//creamos una funcion llamada frutas y pasaremos
//un argumento fruta
function frutas($fruta){
    //llamado al arreglo fruta
    //y agregamos una fruta al arreglo
    array_push($fruta, "Sandia");
}
//llamando a la funcion frutas
frutas($fruta);
var_dump($fruta);



//Funcion por referencia
//Ahora el argumento se pasa por referencia
//anteponiendo el simbolo &
function saludodd(&$nombre){
    $nombre .= ", Buenos dias";
}
$nombre="Sofia Flores";
saludodd($nombre);
echo $nombre;


//Funciones anonimas
function(){
    return "Hola";
};


//definicion de funcion anonima
$saludo = function(){
    return "Hola";
};

echo $saludo();

//Añadiendo la funcion en otra
function saludod($saludar){
    echo $saludar();
}

saludod(function(){
    return "Buenos dias";
});

//clausuras

$color="Azul";
$mostrar= function() use($color){
    echo "Su color favorito es $color";
};
$mostrar();

//Alterando el valor de la variable
$color="Azul";
$mostrar= function() use($color){
    echo $color="Verde";
};
$mostrar();
echo $color;//mostrara azul


//Alterando el valor
$color="Azul";
$mostrar= function() use(&$color){
    echo $color="Verde";
};
$mostrar();
echo $color;//mostrara azul


//funcion
$saluda =function ($nombres){
    print ("Hola". $nombres);
};

$saluda("Andrea"); //devuelve Hola Andrea
call_user_func($saluda, "Amigos"); //Devuelve Hola amigos


//DECLARACIONES DE TIPO
function salude(array $nombre){
    echo "Hola". join("", $nombre);
}
//llamando a la funcion saludo
//pasadmos un arreglo de nombre comoa rgumento
salude(["Carmen", "Jose"]);

//Declaraciones de tipo de evolucion

//declaramos la funcion suma
//se define como valor de retorno un valor entero
function suma($numero1, $numero2): int{
    return $numero1+$numero2;
}
//con var_dump visualizamos el tipo de dato que retorna
var_dump(suma(6,7));


//declaramos la funcion sumas
//se define como valor de retorno un valor entero
function sumas($numero1, $numero2): int{
    return $numero1+$numero2;
}
//declaramos el valor como float
//con var_dump visualizamos el tipo de dato que retorna
var_dump(sumas(6.2,7.5));



//usando el strict_types
declare(strict_types=1);

//declaracion de funcion sumad
//se define como valor de retorno un valor entero
function sumad($numero1, $numero2):int{
    return $numero1+$numero2;
}
var_dump(sumad(6.5, 6.2));


//declaracion de funcion sumade
//se define como valor de retorno un valor float
function sumade($numero1, $numero2):float{
    return $numero1+$numero2;
}
var_dump(sumade(6.5, 6.2));



?>