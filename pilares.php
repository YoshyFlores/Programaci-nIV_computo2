<?php
    class Auto{
        //abstracción|identificar propiedades y metodos
        //encapsulamuiento a traves de modificadores de acceso
        public $marca; //acceso desde cualquier parte del codigo
        private $modelo; //acceso solo desde la clase donde se declaro
        private $color; //acceso dentro de la clase y claes derivadas
        private $motor;


        //public function acelerar(){}
        //public function frenar(){}
        //metodo constructor
        public function __construct($_color="", $_motor="")
        {
            $this->color = $_color;
            $this->motor=$_motor;
        }
        public static function __construct1($_color, $_motor, $_modelo){
            $val = new self($_color, $_motor, $_modelo);
            $val->modelo =$_modelo;
            return $val;
        }
        //metodos de propiedad
        //modelo
        public function setModelo($value){$this->modelo=$value;}
        public function getModelo(){return $this->modelo;}

        public function getColor(){return $this->color;}
        public function getMotor(){return $this->motor;}

    }

    //uso de la clase auto
    $auto = new Auto("Negro", "motor"); //instancia de la clase
    $auto-> marca="Toyota";
    echo $auto-> marca;

    $auto-> setModelo("Corolla");
    echo $auto-> getModelo();
    echo $auto-> getColor();
    echo $auto-> getMotor();

    $a = Auto::__construct1("Blanco ", "", " Corolla ");
    echo $a-> getModelo();
    echo $a-> getColor();
    echo $a-> getMotor();


    //$auto-> color = "Negro";
    //echo $auto-> color;


?>