<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Abrir y guardar JSON</h1>
<h2>Introduce aqui los campos de la tarea</h2>
<h2><a href="webRestauranteJson/index.php">Web restaurante</a></h2>
<form action="index.php" method="get">
    <label>
        Titulo de la tarea:
        <input type="text" name="tituloTarea">
    </label><br>
    <label>
        Descripcion de la tarea:
        <input type="text" name="descTarea">
    </label><br>
    <label>
        Fecha:
        <input type="date" name="fechaTarea">
    </label><br>
    <input type="submit" value="Añadir Tarea" onclick="actualizarLista()">
</form>

    
</body>
</html>

<?php







    // DEBUG 
$debug=0;

function 🤬($v , $formato='variable'){
    global $debug;

    if($debug){

        switch($formato){
            case 'variable':
                echo '<div class="debug">EL VALOR ES: <strong> '.$v.'</strong> </div>';    
            break;
            case 'array':
            case 'print_r':
            case 'printr':
            case 'pepito':
                echo '<div class="debug">';
                echo '<pre>';
                    print_r($v);
                echo '</pre>';
                echo '</div>';    
            break;
        }
    }
}
//------------------

//ABRIR DATOS DEL json + Decodificarlos + Mostrarlos en una lista




function actualizarLista(){


    // 1. Miramos si hay algún dato en el GET
if(isset( $_GET['tituloTarea']) && isset( $_GET['descTarea']) && isset( $_GET['fechaTarea'])){
    $datoGETT = $_GET['tituloTarea'];
    $datoGETD = $_GET['descTarea'];
    $datoGETF = $_GET['fechaTarea'];
    }

    // 2. Cargamos el Archivo JSON
$archivo='tareas.json';
$archivoN='tareasNuevas.json';

if(file_exists($archivo)){
    $importar = file_get_contents($archivo);
    // 3. Decodificar JSON y convertirlo en un Array PHP
    $miArray = json_decode($importar,true);
}

// 4. Añadir el nuevo dato al final del Array

if(!$datoGETT=='' && !$datoGETD=='' && !$datoGETF==''){

    //añadir a $miArray el dato obtenido por GET
    array_push($miArray['tareas'],Array('titulo'=>$datoGETT,'descripcion'=>$datoGETD,'fecha'=>$datoGETF));
   🤬($miArray, 'print_r');
}


// 5. IMPRIMIMOS EL ARRAY  Mostramos los datos en una lista HTML
echo '<ol>';
    foreach($miArray['tareas'] as $tar){
        echo "<li><strong>{$tar['titulo']}</strong>
        <ul>
        <li>{$tar['descripcion']}</li>
        <li>{$tar['fecha']}</li>
        </ul>
        </li>";
    }
echo '</ol>';

// 6. Convertismo el Array en formato JSON

$nuevoJSON = json_encode($miArray,  JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// 7. Guardamos el JSON

file_put_contents($archivo,$nuevoJSON);
}

actualizarLista()
?>