<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<h1>Lista de componentes</h1>

<?php

// CREATE TABLE `componentes` (
//     `id` INT AUTO_INCREMENT PRIMARY KEY,
//     `nombre` VARCHAR(255) NOT NULL,
//     `modelo` VARCHAR(255) NOT NULL,
//     `descripcion` TEXT,
//     `estado` VARCHAR(100),
//     `precio` DECIMAL(10, 2)
//falta añadir la imagen
// );


// INSERT INTO `componentes` (`nombre`, `modelo`, `descripcion`, `estado`, `precio`)
// VALUES
// ('Fuente de alimentación', 'FXG-1205', 'Fuente de alimentación de 12V, 5A, para proyectos electrónicos.', 'Nueva de serie', '100.00'),
// ('Resistencia', 'R123', 'Resistencia de 100 ohmios, 1/4 W, de película metálica.', 'Nueva', '0.50'),
// ('Condensador', 'C220', 'Condensador electrolítico de 220uF, 25V.', 'Nueva', '0.30'),
// ('Diodo', 'D1N4007', 'Diodo rectificador de 1A, 1000V.', 'Usado', '0.15'),
// ('Transistor', '2N2222', 'Transistor NPN de uso general, para amplificación de señal.', 'Nueva de serie', '0.75'),
// ('LED', 'L-1604G', 'LED verde de 5mm, con una luminosidad de 2000 mcd.', 'Nueva', '0.20'),
// ('Placa PCB', 'PCB-4x6', 'Placa de circuito impreso de 4x6 cm, sin perforaciones.', 'Nueva', '1.50'),
// ('Microcontrolador', 'ATmega328P', 'Microcontrolador de 8 bits, 32KB de memoria Flash, utilizado en placas Arduino.', 'Nueva', '3.50'),
// ('Motor DC', 'DC-12V', 'Motor de corriente continua de 12V, adecuado para pequeños proyectos.', 'Nueva', '7.50'),
// ('Sensor de temperatura', 'TMP36', 'Sensor de temperatura analógico con salida lineal.', 'Nueva', '4.00');
//falta añadir las imagenes

// UPDATE `componentes`
// SET `imagen` = CASE `id`
//     WHEN 1 THEN 'https://backend.intelbras.com/sites/default/files/styles/image_optim/public/2023-04/intelbras_EFM_1205_persp_dir_1000x1000px.png'
//     WHEN 2 THEN 'https://ae01.alicdn.com/kf/Sb1c3bd979f4e4acba087a52cecaa62deY.jpg_640x640q90.jpg'
//     WHEN 3 THEN 'https://cdn.manomano.com/images/images_products/3113529/P/28477814_1.jpg'
//     -- Agregar más cuando sea necesario
//     ELSE `imagen` -- Si no coincide, mantiene el valor actual
// END;
//comando sql para meter las imagenes

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pc_componentes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM componentes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<ul>";
  while($row = $result->fetch_assoc()) {
    echo "<li><h2>Nombre: " . $row["nombre"]. "</h2><p>id: " . $row["id"]. "</p><h3>Modelo: " . $row["modelo"]. "</h3><p>Descripcion: ".$row["descripcion"]."</p>
        <h4>Estado: ".$row["estado"]."</h4><span>Precio: ".$row["precio"]."</span><img src='".$row["imagen"]."' alt='asd'></li>";
  }
} else {
  echo "0 results";
  echo "</ul>";
}
echo "</ul>";
$conn->close();
?>
<img src="" alt="">
</body>
</html>