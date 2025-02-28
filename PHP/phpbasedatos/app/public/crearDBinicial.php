<?php
$databasename="Restaurante";
$dbhost ="localhost";
$dbuser="root";
$dbpassword="root";

//crear conexion a la base de datos
    $conn=mySqli_connect($dbhost,$dbuser,$dbpassword);

    //verificamos la conexion
    if(!$conn){
        die("conexion fallida: " .mysqli_connect_error());
    }
    //no hace falta un else por la funcion die();
    echo "conexion exitosa";
    //crear la base de datos

    $sql= "CREATE DATABASE IF NOT EXISTS $databasename ";
    if(mySqli_query($conn, $sql)){
        echo "base de datos creada exitosamente";
    }else{
        echo "base de datos no creada";
    }
    ?>
    

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DataBase</h1>
    <a href="crearBS.php">Crear otra base de datos</a>
    
    
    
    
    

    
    
    
    
    
</body>
</html>