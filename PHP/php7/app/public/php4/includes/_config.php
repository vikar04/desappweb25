<?php
//especifica si estamos en modo desarrollo

$debug=true;

$menu=[
    //texto del link     url del link        target       clases
    ['texto'=>'Home', 'link'=>'index.php', 'target'=>1, 'class'=>'elemento'],
    ['texto'=>'La galaxia hoy', 'link'=>'blog.php', 'target'=>0, 'class'=>'elemento'],
    ['texto'=>'Calendario', 'link'=>'calendario.php', 'target'=>0, 'class'=>'elemento'],
    ['texto'=>'Facebook', 'link'=>'https://facebook.com', 'target'=>1, 'class'=>'elemento facebook'],
    ['texto'=>'Contacto', 'link'=>'contacto.php', 'target'=>0, 'class'=>'elemento']
];

$titulo= "Miweb";

$dato=[
    'titulosite'=>'AstraLaVista',
    'descripcion'=>'Grupo de astronomos entusiastas de Skynet',
    'lang'=>'es',
    'titulosite'=>'AstraLaVista',
    'titulosite'=>'AstraLaVista',
    ''
]

function constructorMenu($classmenu){
    global $menu; //para utilizar elementos fuera de la funcion
    echo "<nav class='$classmenu'>
    <ul>";
    foreach ($menu as $item) {
        // Asignamos las variables para mayor claridad aunque pueden introducirse en el echo directamente
        $texto = $item['texto'];
        $link = $item['link'];
        $target = $item['target'];
        $class = $item['class'];

        echo "<li>
    <a href='$link'";
    if($target==1){//si es uno aplica el target='_blank
        echo "target='_blank'";//target=_blank abre el enlace en una nueva pestaña
        }
    echo "class='$class'>$texto</a>
    </li>";
    
    }
    echo "</ul>
    </nav>";
    
    
    
    //<li>
    //<a href='#' target='_blank'>Item 1
    //</li>
    //<li>
    //<a href='#'>Item 2
    //</li>
    
}

?>