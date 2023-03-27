<?php

//clase abstracta
abstract class Auto{
//miembr0s de la clase

}
abstract class Autoox{
    //miembr0s de la clase
    
}

    //interface{
interface iAuto{

}
interface iAuto2{}
class Auto2 extends Auto, Autoox{

}
class Auto3 extends iAuto, iAuto2{

}

//instancia de la clase
//-$auto=new Auto();
$auto = new Auto();



?>