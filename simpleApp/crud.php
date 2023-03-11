<?php

    //incluimos el archivo con las funciones
    include "functions.php";

    //obtener la accion a realizar
    $action =$_POST ['action'];

    //obtenemos los valores
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    //evaluamos las acciones
    if($action == "guardar"){
        //guardar los datos en un array
        saveData($name, $lastname, $age);
        //redirigir
        header('Location: index.php');
    }
    //agregamos la funcion para editar registros
    if($action == "editar"){
        $cod = $_POST['cod'];

        //actualizar datos
        updateData($cod, $name, $lastname, $age);

        //redirigir
        header('Location: index.php');
    }

    //eliminar registro
    if($action == "eliminar"){
        $cod = $_POST['cod'];

        //llamando a la funcion eliminar
        deleteData($cod);

        header('Location: index.php');
    }

?>