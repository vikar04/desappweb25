/*lista de puntos turisticos*/
let lugares = [
    ["Coliseo Romano", "img/coliseo.jpg", "Un emblema del Imperio Romano.", "Coliseo Romano."],
    ["Vaticano", "img/vaticano.jpg", "La Basílica de San Pedro, la Capilla Sixtina y los Museos Vaticanos.", "Plaza San Pedro."],
    ["Catedral de Santa María del Fiore", "img/florencia.jpg", "Famosa catedral de Florencia con su impresionante cúpula.", "Catedral de Florencia."],
    ["Galería Uffizi", "img/uffizi.jpg", "Uno de los museos más importantes del mundo con obras maestras de artistas renacentistas.", "Galería Uffizi."],
    ["Puente Vecchio", "img/puente-vecchio.jpg", "Un puente medieval famoso por sus tiendas de joyas.", "Puente Vecchio."],
    ["Plaza de San Marcos", "img/venecia.jpg", "La famosa plaza en Venecia, con la Basílica de San Marcos y el Campanile.", "Plaza San Marcos."],
    ["Gran Canal", "img/gran-canal.jpg", "El principal canal de Venecia, ideal para recorrer en góndola.", "Gran Canal."],
    ["La Última Cena", "img/ultima-cena.jpg", "El mural de Leonardo da Vinci en el convento de Santa Maria delle Grazie en Milán.", "La Última Cena."],
    ["Catedral de Milán", "img/catedral-milan.jpg", "Una impresionante catedral gótica en el centro de Milán.", "Catedral de Milán."],
    ["Monte Vesubio", "img/vesubio.jpg", "El volcán que destruyó Pompeya, con vistas espectaculares de la bahía de Nápoles.", "Monte Vesubio."],
    ["Pompeya", "img/pompeya.jpg", "Las ruinas de una ciudad romana sepultada por la erupción del Vesubio.", "Ruinas de Pompeya."],
    ["Costa Amalfitana", "img/costa-amalfitana.jpg", "Una hermosa costa con pueblos pintorescos y acantilados impresionantes.", "Costa Amalfitana."],
    ["Torre de Pisa", "img/torre-pisa.jpg", "La famosa torre inclinada en Pisa, parte de un complejo arquitectónico histórico.", "Torre de Pisa."],
    ["Valle de los Templos", "img/valle-templos.jpg", "Un sitio arqueológico en Sicilia con templos griegos impresionantes.", "Valle de los Templos."],
    ["Monte Etna", "img/etna.jpg", "El volcán activo más grande de Europa, ideal para senderismo y aventuras.", "Monte Etna."],
    ["Cinque Terre", "img/cinque-terre.jpg", "Cinco pueblos pintorescos en la costa ligur, ideales para hacer senderismo y disfrutar del mar.", "Cinque Terre."],
    ["Lago de Como", "img/lago-como.jpg", "Un lago de aguas cristalinas rodeado de montañas y hermosas villas.", "Lago de Como."],
    ["La Mole Antonelliana", "img/mole-antonelliana.jpg", "Un edificio icónico de Turín con vistas panorámicas de la ciudad.", "La Mole Antonelliana."]
];
/*variable iteradora*/
let fotoActual = 1;

/*funcion random*/
function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

/*funciones para moverse entre las fotos*/
function anterior() {
    fotoActual--;
    verificar();

    document.getElementById("foto").src = lugares[fotoActual][1];
    document.getElementById("foto").alt = lugares[fotoActual][3];
    console.log(fotoActual);

    
    
}

function siguiente() {
    fotoActual++;
    verificar();

    document.getElementById("foto").src = fotos[fotoActual][1];
    document.getElementById("foto").alt = lugares[fotoActual][3];
    console.log(fotoActual);

}

/*funcion que verifica el indice para borrar uno de los botones en caso de que este en uno de los extremos del array*/
function verificar() {
    if (indiceAct == 0) {
        document.getElementById('bntAnt').style.display = "none"
    } else {
        document.getElementById('bntAnt').style.display = "inline"
    }

    if (indiceAct == cartelera.length - 1) {
        document.getElementById('bntSig').style.display = "none"
    } else {
        document.getElementById('bntSig').style.display = "inline"
    }
    console.log(lugares.length);
}

/*funcion para mostrar un lugar aleatorio*/
function aleatorio(){
/*generar un indice aleatorio*/
let num=random(0, lugares.length-1)
document.getElementById("foto").src = fotos[num][1];
document.getElementById("foto").alt = lugares[num][3];
fotoActual=num;
console.log(fotoActual);
}

aleatorio();
/*intervalo para intercalar entre las fotos cada 6 segundos*/
setInterval(aleatorio, 6000);