let fotos = [
    "imagenes/foto1.png",
    "imagenes/foto2.png",
    "imagenes/foto3.png",
    "imagenes/foto4.jpg"
]
let fotoActual = 1;

function cambiardiapo(num) {
    document.getElementById("foto").src = fotos[num];
    fotoActual = num;
}



function anterior() {
    fotoActual--;
    document.getElementById("foto").src = fotos[fotoActual];

    if(fotoActual==0){
        document.getElementById("bntAnt").style.display="none";
    }else{
        document.getElementById("bntSig").style.display="inline";
    }
    
}

function siguiente() {
   
    fotoActual++;
    document.getElementById("foto").src = fotos[fotoActual];

    if(fotoActual==fotos.length-1){
        document.getElementById("bntSig").style.display="none";
    }else{
        document.getElementById("bntAnt").style.display="inline";
    }
}

anterior();

