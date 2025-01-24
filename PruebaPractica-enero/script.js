const cartelera=[
    ["La suprema arte de la guerra es someter al enemigo sin luchar.", "Sun Tzu", "https://www.textos.info/img/8/8627/sun-tzu.jpg"],
    ["La clave de todo conocimiento está en conocerse a uno mismo.", "Platón","https://cb0ab5e03d.clvaw-cdnwnd.com/d8bdf97eeab3cba1833911b0d005b803/200002316-a4f98a4f9a/Platon.jpg"],
    ["Veni, vidi, vici", "Julio César", "https://liderexponencial.es/wp-content/uploads/2023/05/liderazgo-julio-cesar.jpg"],
    ["Ayer es historia, mañana es un misterio, pero hoy es un regalo. Por eso se llama presente.", "Oogway", "https://preview.redd.it/can-we-have-a-master-oogway-skin-for-lou-yi-v0-uinfcyy7eysc1.jpg?width=640&crop=smart&auto=webp&s=3468f870309209e150e27dddb9ad5ed8b0e3a425"],
]

let indiceAct=-1;
function verificar(){
    if(indiceAct==0){
        document.getElementById('ant').style.display="none"
    }else{
        document.getElementById('ant').style.display="inline"
    }

    if(indiceAct==cartelera.length-1){
         document.getElementById('sig').style.display="none"
    }else{
        document.getElementById('sig').style.display="inline"
    }
    console.log(cartelera.length);
}
function siguiente(){
    indiceAct++;
    verificar();
    
    document.querySelector("h2").innerHTML="Frase: "+(indiceAct+1)
    document.querySelector("p").innerHTML="<em>"+cartelera[indiceAct][0]+"</em>";
    document.querySelector("img").src=cartelera[indiceAct][2];
    document.querySelector("h3").innerHTML=cartelera[indiceAct][1];
}

function anterior(){
    indiceAct--;
    verificar();
    
    document.querySelector("h2").innerHTML="Frase: "+(indiceAct+1)
    document.querySelector("p").innerHTML= cartelera[indiceAct][0];
    document.querySelector("img").src=cartelera[indiceAct][2];
    document.querySelector("h3").innerHTML=cartelera[indiceAct][1];
}
siguiente();
verificar();