<?php
//variable con el titulo web
$titulo="Fruteria Patricia";
include "bloques/header.php";
?>

<h1>
      <? echo $titulo ?>
</h1>
<p>En Frutería de Patricia nos dedicamos a ofrecerte la mejor selección de frutas y verduras frescas, de calidad y
      directamente desde el campo a tu mesa. Con pasión y compromiso, trabajamos para brindarte productos saludables que
      cuidan
      tu bienestar y el de tu familia. ¡Visítanos y disfruta de lo mejor de la naturaleza!</p>

<section>
      <h2>Nuestros Valores y Compromiso</h2>

      <p>En Frutería de Patricia, creemos que el éxito de nuestra tienda se basa en los valores que compartimos como
            equipo y en el compromiso con nuestros clientes. Cada uno de nuestros trabajadores tiene un papel
            fundamental en la entrega de productos frescos, de calidad y con el mejor servicio. Nos guiamos por
            principios sólidos que nos permiten ofrecerte una experiencia única.</p>

      <article>
            <h3>Compromiso con la Calidad</h3>
            <p>Nos aseguramos de ofrecerte solo lo mejor. Nuestros trabajadores se encargan de seleccionar y cuidar cada
                  producto para que siempre encuentres frutas y verduras frescas y saludables.</p>
      </article>

      <article>
            <h3>Trabajo en Equipo</h3>
            <p>Cada miembro del equipo es fundamental para lograr el objetivo común: ofrecerte una experiencia de compra
                  agradable y productos de alta calidad. Fomentamos un ambiente colaborativo donde todos compartimos
                  ideas y soluciones.</p>
      </article>

      <article>
            <h3>Responsabilidad y Sostenibilidad</h3>
            <p>Estamos comprometidos con el medio ambiente y la sostenibilidad. Buscamos reducir nuestro impacto
                  ecológico utilizando prácticas responsables, como el uso de envases reciclables y la promoción de
                  productos locales y orgánicos.</p>
      </article>

      <article>
            <h3>Atención Personalizada</h3>
            <p>Cada cliente es único, y por eso nos tomamos el tiempo para ofrecer un servicio personalizado. Nuestros
                  trabajadores están siempre dispuestos a asesorarte sobre el mejor producto para tus necesidades.</p>
      </article>

      <article>
            <h3>Transparencia y Confianza</h3>
            <p>Valoramos la transparencia en todo lo que hacemos. Desde la selección de nuestros productos hasta el
                  trato con nuestros clientes, siempre actuamos con honestidad y respeto.</p>
      </article>

      <p>En Frutería de Patricia, estamos convencidos de que un trabajo bien hecho es la clave para que tú y tu familia
            disfruten de lo mejor de la naturaleza. Gracias por confiar en nosotros.</p>
</section>

<section>
  <h2>Suscríbete a nuestro boletín</h2>
  <p>Recibe nuestras mejores ofertas y novedades directamente en tu correo electrónico.</p>
  <form>
    <input type="email" placeholder="correo electrónico" name="email">
    <button type="submit">Suscribirme</button>
  </form>
</section>



<?php include "bloques/footer.php"
?>