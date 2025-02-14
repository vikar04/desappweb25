<?php
require 'bloques/config.php'
?>
<?php
//require 'bloques/header.php'
?>

<?php
//Definimos los datos correctos
$usuarioCorrecto='richard';
$passwordCorrecto='mate';


//Comprobamos que el formulario de login halla sido rellenado
if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
    //Guardamos los datros introducidos por el usuario en variables
    $usuarioIngresado = $_POST['usuario'];
    $passwordIngresado = $_POST['contrasena'];

    //se escriben los datos introducidos
    debug("El usuario es: $usuarioIngresado <br>");  //emplear funciones en caso de tener la funcion 
    debug("El Password es: $passwordIngresado <br>");  //debug en el config

    //comprobamos los datos introducidos para ver si son correctos
    if($usuarioCorrecto == $usuarioIngresado && $passwordCorrecto == $passwordIngresado){
        header ('Location: admin.php');
    }
    else{
        echo "Las credenciales son incorrectas<a href='login.php'>Volver a intentar</a>";
    }
}else{
?>
<form action="" method="post">
<label for="usuario">Usuario:</label>
<input type="text" name="usuario" id="usuario">

<label for="contrasena">Contraseña</label>
<input type="text" name="contrasena" id="contrasena">
<input type="submit" value="Acceder">

</form>
<?php
}
?>

<a href="index.php">Volver</a>
<?php
//require 'bloques/footer.php'
?>