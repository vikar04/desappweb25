<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Restaurante La costa</h1>
    <h2>Disfruta de nuestro famoso menu rebosado de platillos locales</h2>
    
    <?php

    $archivo='menu.json';
    
    $archivoR='reserva.json';

if(file_exists($archivo)){
    $importar = file_get_contents($archivo);
    // 3. Decodificar JSON y convertirlo en un Array PHP
    $miArray = json_decode($importar,true);
}

// 5. IMPRIMIMOS EL ARRAY  Mostramos los datos en una lista HTML
echo '<ul>';
    foreach($miArray['platos'] as $pla){
        echo "<li><strong>{$pla['nombre']}</strong>
        <ul>
        <li>{$pla['descripcion']}</li>
        <img src='{$pla['imagen']}' alt=''>
        </ul>
        </li>";
    }
echo '</ul>';

$nuevoJSON = json_encode($miArray,  JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);


file_put_contents($archivo,$nuevoJSON);

    ?>
    <h2>Has tu pedido a domicilio aqui</h2>
<?php
    echo "<form action='index.php' method='get'>
        <label for='plat'>
        Pedidos</label><br>
        <select name='plats' id='plat'>
        <option value='selec'>Selecciona</option>";

    foreach($miArray['platos'] as $pla){
        echo "<option value='{$pla['nombre']}'>{$pla['nombre']}</option>";
  }
  echo "<label>
        Cantidad:
        <input type='number' name='cantidad'>
        </label>
  <input type='submit' value='Añadir a la cesta' onclick='masP({$pla['nombre']})'>
  </select>
    </form>";
        
    echo '<form action="index.php" method="get">
    <input type="hidden" name="limpiar" value="true">
    <input type="submit" value="Limpiar lista">
</form>';

function masP(){
    // 1. Verificamos si hay datos en el GET
    if(isset($_GET['cantidad']) && isset($_GET['plats']) && !empty($_GET['cantidad']) && $_GET['plats'] != 'selec'){
        
        // 2. Recibimos los datos del GET
        $datoGETC = $_GET['cantidad'];
        $datoGETPLAT = $_GET['plats'];
        
        // 3. Leer el archivo de pedidos
        $archivoP = 'pedido.json';
        if(file_exists($archivoP)){
            $importarP = file_get_contents($archivoP);
            // 4. Decodificar JSON y convertirlo en un array PHP
            $miArrayP = json_decode($importarP, true);
        } else {
            // Si no existe, inicializamos el array de pedidos
            $miArrayP = ['pedido' => []];
        }
        
        // 5. Añadir el nuevo pedido al array
        // Verificar si el plato ya está en el pedido
        $existe = false;
        foreach ($miArrayP['pedido'] as $key => $pe) {
            if($pe['nombre'] === $datoGETPLAT){
                // Si ya existe, sumamos la cantidad
                $miArrayP['pedido'][$key]['cantidad'] += $datoGETC;
                $existe = true;
                break;
            }
        }

        // Si no existe, agregamos el nuevo pedido
        if (!$existe) {
            array_push($miArrayP['pedido'], ['nombre' => $datoGETPLAT, 'cantidad' => $datoGETC]);
        }
        
        // 6. Guardamos el array actualizado en el archivo JSON
        $nuevoJSONP = json_encode($miArrayP, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($archivoP, $nuevoJSONP);
        
        // 7. Mostrar el pedido actualizado
        echo '<ul>';
        foreach ($miArrayP['pedido'] as $pe) {
            echo "<li><strong>{$pe['nombre']}</strong>
                    <ul>
                        <li>Cantidad: {$pe['cantidad']}</li>
                    </ul>
                  </li>";
        }
        echo '</ul>';
    }
}


?>


    <?php
// Verificar si se ha enviado la solicitud de limpiar
if(isset($_GET['limpiar']) && $_GET['limpiar'] == 'true'){
    limpiar(); // Llamamos a la función limpiar
}

function limpiar(){
    $archivoP = 'pedido.json';

    // 1. Verificamos si el archivo existe
    if(file_exists($archivoP)){
        // 2. Leemos el contenido del archivo
        $importarP = file_get_contents($archivoP);
        // 3. Decodificamos el contenido JSON en un array PHP
        $miArrayP = json_decode($importarP, true);

        // 4. Borramos todos los elementos de la lista 'pedido'
        $miArrayP['pedido'] = array(); // Asignamos un array vacío

        // 5. Guardamos el archivo con la lista 'pedido' vacía
        $nuevoJSONP = json_encode($miArrayP, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($archivoP, $nuevoJSONP);
    }
}

    masP();


?>
    
</body>
</html>