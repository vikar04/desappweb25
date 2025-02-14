<?php
include "inc/header.php";
include "data.php";
?>
<h1><?php echo data["titulo_site"]?></h1>
<address><?php echo data["direccion"]?></address>
<a href="tel:<?php echo data["telefono"]?>"><?php echo data["telefono"]?></a>

<? include "inc/footer.php";
?>