let menunav=[
    '#inicio',
    '#cursos',
    '#escuela',
    '#contacto'
]

function ocultar(menu){
    document.querySelector('#inicio').style.display='none';
    document.querySelector('#cursos').style.display='none';
    document.querySelector('#escuela').style.display='none';
    document.querySelector('#contacto').style.display='none';

    document.querySelector(menunav[menu]).style.display='block';
}
ocultar(0);