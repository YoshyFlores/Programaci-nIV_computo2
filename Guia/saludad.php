<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludar</title>
</head>
<body>
    <form action="saludar.php" method="post">
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    if ($_POST["sexo"]=="femenino"){
        print ("Sexo Femenino");
    }else{
        print ("Sexo Masculino");
    }
?>