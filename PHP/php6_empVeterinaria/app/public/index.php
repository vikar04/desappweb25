<?php $titulo='Inicio' ?>
<?php require 'bloques/config.php';


$listaEmpleados = cargarJson($archivo);
mostrarJson($listaEmpleados);

?>
<?php
include_once 'bloques/header.php';
?>
<h1>Veterinaria PETcare</h1>

<?php 

if(isset($listaEmpleados)){
    echo '<ul class="emp">';
    foreach($listaEmpleados['trabajador'] as $trab){
        echo "
        <li>
            <h2>{$trab['nombre']}</h2>
            <p>{$trab['edad']}</p>
            <p>{$trab['experiencia']}</p>
            <h3>{$trab['mascota']}</h3>
            <img src='{$trab['imagen']}' alt='{$trab['mascota']}'>
        </li>";
    }
    echo '</ul>';
};
?>



<?php
include_once 'bloques/footer.php';
?>