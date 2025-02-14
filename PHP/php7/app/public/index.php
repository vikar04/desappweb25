<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio</title>
    <style>
        ul{
            list-style: none;
        }

        li{
            padding: 10px;
            
        }
        a{
            text-decoration: none;
            color: black;
            padding:10px;
            border-radius:20px;
        }

        a:hover{
            background:gray;
        }


        .carpeta{
            background: orange;
        }
        .archivo{
            background:green;
        }  
        .destacado{
            background:red;
        }

    </style>
</head>
<body>

<h1>Ejercicios de clase</h1>

<?php
//include "dir.php"; esta linea activa el archivo dir.php (debe desactivarse el php de abajo para q funcione)
?>
    <?php
    $directorio="./";

    //Verifica si hay GET en la URL y es un directorio
    if(isset($_GET['dir'])){
        $dirlimpio= basename($_GET['dir']);
        $directorio .= $dirlimpio . '/';
    }

    if(!is_dir($directorio)){
        echo "<p>Error: El directorio esta vacio.</p>";
    }
    else{
        $arrayDirectorio= scandir($directorio);
        $arrayNoQuiero=['.','..'];//Elementos a excluir

        $arrayNoQuiero = array_diff($arrayDirectorio, $arrayNoQuiero);
    }
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
        $link= $rutaCompleta;
        }
        else{
            $icono="📁";
            $class = 'carpeta';
            $link= "index.php?dir=" . urldecode($archivo);
        }
        echo"<li><a href = '$link' class='$class'>$icono $archivo</a></li>";
    }
    echo "</ul>";

    ?>
</body>
</html>