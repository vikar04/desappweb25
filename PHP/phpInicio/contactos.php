<?php
//variable con el titulo web
$titulo="Fruteria Patricia";
include "bloques/header.php";
?>

<section>
  <h2>¿Tienes preguntas? ¡Contáctanos!</h2>
  <form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email"><br>

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje"></textarea><br>
    <button type="submit">Enviar mensaje</button>

  </form>
</section>





<section>
  <h2>Visítanos</h2>
  <p>Estamos ubicados en el corazón de la ciudad, listos para ofrecerte los mejores productos frescos. ¡Ven y descubre todo lo que tenemos para ti!</p>
  <h3>Horarios de Atención:</h3><br>
     <p>Lunes a Viernes: 8:00 AM - 6:00 PM<br>
     Sábados: 9:00 AM - 3:00 PM<br>
     Domingos: Cerrado</p>
</section>







<?php include "bloques/footer.php"
?>