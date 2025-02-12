<?php
$titulo='Administracion'
?>

<?php
require 'bloques/config.php';
?>

<?php
include_once 'bloques/header.php';
?>

<h1>Administracion de empleados</h1>

<h2>Rellena el formulario para añadir un nuevo empleado a la lista</h2>
<form action="admin.php" method="get">
<label for="nombreAp">Nombre del Empleado:
                <input type="text" id="nombreAp" name="nombreAp" placeholder="Nombre de la persona" required></label><br>
         
            <label for="ed">Edad:
                <input type="number" id="ed" name="ed" placeholder="Edad" required></label><br>
           
            <label for="exp">Años de experiencia:
                <input type="number" id="exp" name="exp" placeholder="XP" required></label><br>

            <label for="nombrePet">Nombre de la Mascota:
                <input type="text" id="nombrePet" name="nombrePet" placeholder="Nombre de la mascota atendida" required></label><br>

            <label for="foto">Foto de la mascota:
                <input type="text" id="foto" name="foto" placeholder="URL de la imagen" required></label><br>
        
            <input type="submit" value="Contratar"><br>
   
        </form>

        <?php

                 $nombreE = $_GET['nombreAp'];
                 $edad = $_GET['ed'];
                 $XP = $_GET['exp'];
                 $nombreP= $_GET['nombrePet'];
                 $img=$_GET['foto'];

                echo $nombreE;

                $miArray = cargarJson('assets/datos/empleados.json');
                
                $miArray['trabajador'][]= array('nombre'=>$nombreE, 'edad'=>$edad, 'experiencia'=>$XP, 'mascota'=>$nombreP, 'imagen'=>$img);
                mostrarJson($miArray);

                $miJSON=json_encode($miArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

                file_put_contents($archivo, $miJSON)
        ?>

<?php
include_once 'bloques/footer.php';
?>