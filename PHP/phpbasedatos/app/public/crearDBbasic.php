<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//recibir los datos
//falta completar el codigo
if(isset($_GET['nombre'], $_GET['host'], $_GET['user'], $_GET['pass'])){
    $databasename=$_GET['nombre'];
    $dbhost =$_GET['host'];
    $dbuser=$_GET['user'];
    $dbpassword=$_GET['pass'];
}

    ?>

<h1>Rellena los datos</h1>

<form action="">
        <label for="host">Servidor Base de Datos</label>
        <input type="text" id="host" name="host" value="localhost" required>

        <label for="user">Usuario BD</label>
        <input type="text" id="user" name="user" required>

        <label for="pass">Contraseña</label>
        <input type="text" id="pass" name="pass" required>

        <label for="nombre">Nombre BS</label>
        <input type="text" id="nombre" name="nombre" required>
        
        
        <input type="submit" value="Crear Base Datos">
    </form>
    
</body>
</html>