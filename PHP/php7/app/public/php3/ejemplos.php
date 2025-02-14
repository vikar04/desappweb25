<?php

//Parte 1
$nombre = "Juan";
$apellido= "Garcia";
$lugar="Gijon";
$nacimiento=1991;
$actualyear=date('Y');
$edad = $actualyear-$nacimiento;
$texto1 = 'Eres '.$nombre.' '.$apellido.', de '.$lugar.' con '.$edad.' años';
$texto2 = "Eres $nombre $apellido";


//Parte 2
$datos = [//array declarativo
    'nombre'=>'Juan',
    'apellido'=>'Garcia',
    'lugar'=>'Gijon',
    'nacim'=> 1991
];


//Formas de hacerlo
//1
$texto = "Eres".$datos['nombre'];
//2
$texto="Eres {$datos['nombre']} {$datos['apellido']} de {$datos['lugar']}";

//echo $texto;

$alumnos = [
    'Juan',
    'Garcia',
    'Gijon'
];

$alumnos[1]; //Esto llama a los elementos de un array normal

//array multidimensional
$students1=[
    ['nombre'=>'Juan',
    'apellido'=>'Garcia',
    'lugar'=>'Gijon',
    'nacim'=> 1991],

    ['nombre'=>'Maria',
    'apellido'=>'de la Vega',
    'lugar'=>'Oviedo',
    'nacim'=> 1991]
];

echo $students1[0]['lugar'];

//Otra forma
$students2=[
    'clase1'=>
    ['nombre'=>'Juan',
    'apellido'=>'Garcia',
    'lugar'=>'Gijon',
    'nacim'=> 1991],

    'clase2'=>
    ['nombre'=>'Maria',
    'apellido'=>'de la Vega',
    'lugar'=>'Oviedo',
    'nacim'=> 1991]
];

echo $students2['clase1']['lugar'];



//bucles
for($i=0; $i<count($students1); $i++){
    echo "<li> {$students1[$i]['nombre']}</li>";
}

function saludar($valor){
    echo "<h2>Hola Mundo $valor</h2>";
}

//saludar();

echo '<ol>';
    for($j=0; $j<4;$j++){
        echo '<li>';
        saludar($j);
        echo '</li>';
    }
echo '</ol>';


function saludo2($valor1){
    return "Buenos dias $valor1";
}


echo '<ol>';
for($k=0; $k<4;$k++){
    $libreta = "<li>";
    $libreta .= saludo2($k);
    $libreta .="</li>";
    echo $libreta;
}
echo '</ol>';
