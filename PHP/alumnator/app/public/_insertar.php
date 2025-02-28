<?php

// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "root", "mibasededatos");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nac = $_POST['nac'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$foto = $_FILES['foto'];
$descripcion = $_POST['descripcion'];

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$apellido = $conn->real_escape_string($apellido);
$nac = $conn->real_escape_string($nac);
$email = $conn->real_escape_string($email);
$curso = $conn->real_escape_string($curso);
$descripcion = $conn->real_escape_string($descripcion);

// Insertar en la base de datos
$sql = "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, email, curso, foto, descripcion) 
        VALUES ('$nombre', '$apellido', '$nac', '$email', '$curso', '$foto', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Alumno agregado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
