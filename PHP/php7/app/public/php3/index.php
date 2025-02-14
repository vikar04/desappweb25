<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .n1{
            color:red;
        }
        .n2{
            color:yellow;
        }
        .n3{
            color:blue;
        }
        .n4{
            color:green;
        }
        .n5{
            color:purple;
        }
    </style>
</head>
<body>

<h1>Archivos de php</h1>

    
</body>
</html>

<?php


$datos =[
    //Nombre, Ruta, Visibilidad: 1-visible, 0-invisible
    ["Carpeta 1", "/carpeta1",1],
    ["Carpeta 2", "/carpeta2",1],
    ["Carpeta 3", "/carpeta3",1],
    ["Json", "/json",1]
];


//Navegador de carpetas
//Con el for
$texto2 = "<ul>";
for($i=0; $i<count($datos); $i++){
    if($datos[$i][2]==1){
        $texto2.="<li><a href=".$datos[$i][1].">".$datos[$i][0]."</a></li>";
    }
}
$texto2 .= "</ul>";
echo $texto2;

//Con el foreach
echo "<ul>";
foreach($datos as $valor){
    if($valor[2]==1){
        echo '<li> Carpeta: <a href="'.$valor[1].'">'.$valor[0].'</a></li>';
    }
}
echo "</ul>";
//Fin de Navegador de carpetas

//--------------------------------------------------------------------------------------------------
$cursos = [
    'Ofimatica',
    'Impresion',
    'Ciberseguridad',
    'Desarrollo Web',
    'Inteligencia Artificial',
    'Bases de Datos',
    'Marketing Digital'
];

$alumnos = [
    'Manolo',
    'Pedro',
    'Ana',
    'Maria',
    'Marta',
    'Antonio'
];

$randomcurs= rand(0,count($cursos)-1);

$texto = "<h1 class=n".rand(1,5).">{$alumnos[rand(0,count($alumnos)-1)]} esta cursando un curso de {$cursos[$randomcurs]}</h1>";

echo $texto; // aleatoriamente: Juan esta cursando un curso de ofimatica.

?>