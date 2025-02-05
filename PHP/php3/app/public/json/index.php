<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilo de los títulos */
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilo para la lista */
        ul {
            list-style: none;
            padding: 0;
            display:flex;
            gap: 20px;
        }

        /* Estilo de cada ítem de la lista */
        li {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        li h3 {
            margin-top: 0;
            color: #4CAF50;
        }

        /* Estilo para los detalles de cada animal */
        .detalle {
            font-size: 14px;
            color: #555;
        }

        .detalle span {
            font-weight: bold;
        }

        img{
            margin: 10px;
            width: 200px;
            height: 150px;
        }

    </style>
</head>
<body>

<h1>Listado de Animales</h1>
    
</body>
</html>
<?php

//Leemos el archivo json y lo convertimos en un array php llamado $datos

$datos = json_decode(file_get_contents('datos.json'), true);

//Iteramos sobre las peliculas y mostramos los detalles

echo "<ul>";
foreach($datos['animales'] as $animal){
    echo "<li>";
    echo "<h3>Nombre: ".$animal['nombre']."</h3><br>";
    echo "<div class='detalle'><span>Especie:</span> " . $animal['especie'] . "<br>";
    echo "<span>Edad:</span> " . $animal['edad'] . "</div>";
    echo "<img src='{$animal['imagen']}'alt=>";
    echo "</li>";
}

echo "</ul>";

?>