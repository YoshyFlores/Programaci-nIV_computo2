<!--Escriba un programa que realice las operaciones básicas (suma, resta, multiplicación),
deberá crear un formulario para procesar los valores ingresados por el usuario, haga uso de
un control combo box para seleccionar la operación a realizar.-->

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>¡Saludos!</title>
    <h1>Selecciona la Operación</h1>
</head>
<div class="card row align-items-center" style="width: 19rem;">
    <div class="card-body row justify-content-center"  >
<form action="operacionesBasicas.php" method="POST">
    Ingrese primer valor:
    <input type="text" name="num1" style="background-color: Aquamarine">
    <br/>
    <br/>
    Ingrese segundo valor:
    <input type="text" name="num2" style="background-color: Aquamarine">
    <br/>
    <br/>
    <select name="operacion">
        <option value="resta">Resta</option>
        <option value="suma">Suma</option>
        <option value="mult">Multiplicación</option>
        <option value="division">División</option>
        <br/>
    </select>
    <br/>
    <input class="row m-3 align-items-center" type="submit" name="enviar" value="Realizar operación" style="background-color:Pink">
    </div>
</div>
</form>
</html>

<?php
    if(isset($_POST["enviar"])){
        $num1 =$_POST["num1"];
        $num2 =$_POST["num2"];
        $operacion = strtolower($_POST["operacion"]);

        $operaciones = array ("suma", "resta", "division", "mult");

        if(!in_array($operacion, $operaciones)){
            echo "La operación no es valida";
            exit();
        }
        switch($operacion){
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "mult":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if($num2 == 0){
                    echo "No se puede dividir por cero";
                    exit();
                }
                $resultado = $num1 / $num2;
                break;
    }
            echo "El resultado de la $operacion de $num1 y $num2 es: $resultado";
        }
    

?>