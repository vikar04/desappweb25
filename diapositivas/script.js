let fotos= [
    "imagenes/foto1.png",
    "imagenes/foto2.png",
    "imagenes/foto3.png",
    "imagenes/foto4.jpg"
]
let fotoActual = 0;

function cambiardiapo(num){   
    document.getElementById("foto").src=fotos[num];
    fotoActual=num;
}

cambiardiapo(0);

function anterior(){
    document.getElementById("foto").src=fotos[fotoActual-1];
    fotoActual--;
}

function siguiente(){
    document.getElementById("foto").src=fotos[fotoActual+1];
    fotoActual++;
}