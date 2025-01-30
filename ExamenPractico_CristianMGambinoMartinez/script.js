/*lista de puntos turisticos*/
let lugares = [
    ["Coliseo Romano", "img/coliseo.jpg", "Un emblema del Imperio Romano.", "Coliseo Romano."],
    ["Vaticano", "img/vaticano.jpg", "La Basílica de San Pedro, la Capilla Sixtina y los Museos Vaticanos.", "Plaza San Pedro."],
    ["Catedral de Santa María del Fiore", "img/florencia.jpg", "Famosa catedral de Florencia con su impresionante cúpula.", "Catedral de Florencia."],
    ["Galería Uffizi", "img/uffizi.jpg", "Uno de los museos más importantes del mundo con obras maestras de artistas renacentistas.", "Galería Uffizi."],
    ["Puente Vecchio", "img/puente-vecchio.jpg", "Un puente medieval famoso por sus tiendas de joyas.", "Puente Vecchio."],
    ["Plaza de San Marcos", "img/venecia.jpg", "La famosa plaza en Venecia, con la Basílica de San Marcos y el Campanile.", "Plaza San Marcos."],
    ["Gran Canal", "img/gran-canal.jpg", "El principal canal de Venecia, ideal para recorrer en góndola.", "Gran Canal."],
    ["Catedral de Milán", "img/catedral-milan.jpg", "Una impresionante catedral gótica en el centro de Milán.", "Catedral de Milán."]
];
/*variable iteradora*/
let fotoActual = 1;

/*funcion random*/
function valorRandom(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

/*funciones para moverse entre las fotos*/
function anterior() {
    fotoActual--;
    verificar();

    document.getElementById("foto").src = lugares[fotoActual][1];
    document.getElementById("foto").alt = lugares[fotoActual][3];
    document.getElementById("h3img").innerHTML = lugares[fotoActual][0];
    document.getElementById("pimg").innerHTML = lugares[fotoActual][2];
    console.log(fotoActual);

    
    
}

function siguiente() {
    fotoActual++;
    verificar();

    document.getElementById("foto").src = lugares[fotoActual][1];
    document.getElementById("foto").alt = lugares[fotoActual][3];
    document.getElementById("h3img").innerHTML = lugares[fotoActual][0];
    document.getElementById("pimg").innerHTML = lugares[fotoActual][2];
    console.log(fotoActual);

}

/*funcion que verifica el indice para borrar uno de los botones en caso de que este en uno de los extremos del array*/
function verificar() {
    if (fotoActual == 0) {
        document.getElementById('bntAnt').style.display = "none"
    } else {
        document.getElementById('bntAnt').style.display = "inline"
    }

    if (fotoActual == lugares.length - 1) {
        document.getElementById('bntSig').style.display = "none"
    } else {
        document.getElementById('bntSig').style.display = "inline"
    }
    console.log(lugares.length);
}

/*funcion para mostrar un lugar aleatorio*/
function aleatorio(){
/*generar un indice aleatorio*/
let num=valorRandom(0, lugares.length-1)
document.getElementById("foto").src = lugares[num][1];
document.getElementById("foto").alt = lugares[num][3];
document.getElementById("h3img").innerHTML = lugares[num][0];
document.getElementById("pimg").innerHTML = lugares[num][2];

fotoActual=num;
verificar();
console.log(fotoActual);
}

aleatorio();
/*intervalo para intercalar entre las fotos cada 6 segundos*/
