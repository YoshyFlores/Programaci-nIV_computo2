<?php

//funciones numericas
//is_number
$number=1;
$number1=1;

if(is_numeric($number)){
    echo "El valor de $number es numerico </br>";
    if(is_numeric($number1)){
        echo "El valor de $number1 es numerico </br>";

    }else{
        echo "El valor de $number1 NO es numerico </br>";

    }

}else{
    echo "El valor de $number NO es numerico </br>";

};


//Funciones numericas
//number_format
$number=256148;
echo number_format($number);

//rand
echo rand(1,100);//genera un numero aleatorio entre 1 y 100;

//round
echo round(1.39);


//sqrt
echo sqrt(24);

//cos
echo cos(24);

//sin
echo sin(24);

//tan
echo tan(24);

//pi
echo pi();












?>