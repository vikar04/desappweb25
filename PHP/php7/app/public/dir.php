<?php

$directorio="./";
$arrayDirectorio= scandir($directorio);
$arrayNoQuiero=['.','..'];

$arrayNoQuiero = array_diff($arrayDirectorio, $arrayNoQuiero);
echo "<ul>";
foreach($arrayDirectorio as $archivo){
    $rutaCompleta=$directorio . $archivo;
    

    if(is_file($rutaCompleta)){
        $icono="📄";
        if($archivo=='index.php' || $archivo == 'index.html'){
            $class = "destacado";
        }else{
        $class = 'archivo';
    }
    }
    else{
        $icono="📁";
        $class = 'carpeta';
    }
    echo"<li><a href = '$archivo' class='$class'>$icono $archivo</a></li>";
}
echo "</ul>";

?>