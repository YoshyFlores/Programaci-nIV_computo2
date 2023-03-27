<?php

    //clase abstracta Instrumento
abstract class Instrumento{
    public $guitarra;
    public $piano;
    public $saxofon;

    
    //funcion
    public function tocar(){
        echo "Tocar el intrumento: ";

    }
    //metodo abs
    abstract function getGuitarra();

    abstract function getPiano();

    abstract function getSaxofon();
};

    //establecer herencia
    class Tipo extends Instrumento{
        //definir el metodo
        public function getGuitarra()
        {
            return $this->guitarra;
        }
        public function getPiano()
        {
            return $this->piano;
        }
        public function getSaxofon()
        {
            return $this->saxofon;
        }
    };

$tipo=new Tipo();
$tipo->guitarra=" Guitarra ";
$tipo->piano=" Piano ";
$tipo->saxofon=" Saxofon ";
echo $tipo->tocar();
echo $tipo->getGuitarra();
echo $tipo->getPiano();
echo $tipo->getSaxofon();


?>