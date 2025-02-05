<?php
//especifica si estamos en modo desarrollo

$debug=true;

$menu=[
    //texto del link     url del link        target       clases
    ['texto'=>'Home', 'link'=>'index.php', 'target'=>0, 'class'=>'elemento'],
    ['texto'=>'La galaxia hoy', 'link'=>'blog.php', 'target'=>0, 'class'=>'elemento'],
    ['texto'=>'Calendario', 'link'=>'calendario.php', 'target'=>0, 'class'=>'elemento'],
    ['texto'=>'Facebook', 'link'=>'https://facebook.com', 'target'=>0, 'class'=>'elemento facebook'],
    ['texto'=>'Contacto', 'link'=>'contacto.php', 'target'=>0, 'class'=>'elemento']
];

$titulo= "Miweb";

function constructorMenu($classmenu){
    global $menu; //para utilizar elementos fuera de la funcion
    echo "<nav class='$classmenu'>
    <ul>";
    foreach ($menu as $item) {
        // Asignamos las variables para mayor claridad
        $texto = $item['texto'];
        $link = $item['link'];
        $target = $item['target'];
        $class = $item['class'];

        echo "<li>
    <a href='$link' target='$target' class='$class'>$texto</a>
    </li>";
    if($target==1){
    echo "target='_blank'";
    }
    }
    echo "</ul>";
    
    
    
    //<li>
    //<a href='#' target='_blank'>Item 1
    //</li>
    //<li>
    //<a href='#'>Item 2
    //</li>
    
}

?>