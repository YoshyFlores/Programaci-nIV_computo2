<?php

//funcion para listar los datos
//funcion para actualizar, guardar, eliminar los datos


    //archivo
    //define(FILE, "datos.txt");
    
    //funcion para listar los datos
    function getData(){
        //si el archivo no existe lo creamos
        //buscaremos el dato mediante el file_exists
        if(!file_exists('datos.text')){
            file_put_contents('datos.text', '');
        }
        //obtener los datos del archivo
        $data=file_get_contents('datos.text');
        $data=json_decode($data, true);

        //si los datos no son array, lo inicializamos
        if(!is_array($data)){
            $data=array();
        }
        return $data;
    }

    //funcion para guardar datos
    function saveData($name, $lastname, $age){
        //verificar si existe nuestro archivo
        //obtenemos los datos actuales del archivo
        $data=getData();

        //crear nuevo registro
        $record=array(
            "name"=> $name,
            "lastname"=> $lastname,
            "age"=> $age
        );

        //agregar el nuevo registro al array de datos
        $data[]=$record;
        //convertir el arreglo a formato json
        $data = json_encode($data);
        file_put_contents('datos.text', $data);
    }

    //funcion para modificar registros
    function updateData($cod, $name, $lastname, $age){
        //obtenemos los datos actuales del archivo
        $data=getData();

        //actualizamos el registro correspondiente
        $data[$cod]['name'] = $name;
        $data[$cod]['lastname']=$lastname;
        $data[$cod]['age']= $age;

        //convertir a formato json
        $data = json_encode($data);
        file_put_contents('datos.text', $data);
    }
    //funcion para eliminar
    //utilizaremos un metodo para arrays

function deleteData($cod){
    //obtener los datos
    $data= getData();

    //eliminar registro
    //se usa el unset para eliminar
    unset($data[$cod]);

    //reindexar el array
    $data = array_values($data);

    //convertimos el array a formato json y guardar archivo
    $data = json_encode($data);
    file_put_contents('datos.text', $data);
}

?>