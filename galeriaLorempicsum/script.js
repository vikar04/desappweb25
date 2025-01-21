function fragmento(){
    let miHTML="";
    max=document.getElementById("num").value;
    for(i=1; i<=max;i++){
        miHTML+=`<li ><img src="https://picsum.photos/id/${i}/50/50" alt="asd" onclick="abrirImagen(${i})"><p>Elemento ${i}</p></li>`
    }
    return miHTML;
}

function abrirImagen(numImg){
    document.getElementById("imagenGrande").src="https://picsum.photos/id/"+numImg+"/200/200";
    document.getElementById("enlace").innerHTML="https://picsum.photos/id/"+numImg+"/200/200"
    document.getElementById("enlace").href="https://picsum.photos/id/"+numImg+"/200/200"
}


function pintar(){
document.querySelector("ul").innerHTML=fragmento();
}

pintar()