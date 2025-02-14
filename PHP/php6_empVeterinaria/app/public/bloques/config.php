<?php
$debug = false;

$archivo = 'assets/datos/empleados.json';
function debug($message){
    global $debug;
    if($debug){
        echo $message."\n";
    }
}

debug("Modo desarrollador activado 🐜");

function mostrarJson($array){
    global $debug;
    
    if($debug==true){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
        }
}

function cargarJson($archivo){


    if(file_exists($archivo)){
            
        $miJSON = file_get_contents($archivo);
        $listaEmpleados = json_decode($miJSON,true);
        
        // $listaPeliculas = json_decode(file_get_contents('cartelera.json'),true);
        return $listaEmpleados;
    }
    else{
        echo "Parece que el archivo $archivo no existe.";
        return null;
    }
        
}

?>