const datos=[
    ["Audi","audi.jpg","4","Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias veritatis voluptas autem accusantium sed incidunt natus ullam ea laborum repellat?"],
    ["BMW","bmw.jpg","4","Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias veritatis voluptas autem accusantium sed incidunt natus ullam ea laborum repellat?"],
    ["Mercedez-Benz","mercedez.jpg","2","Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias veritatis voluptas autem accusantium sed incidunt natus ullam ea laborum repellat?"],
    ["Toyota","toyota.jpg","3","Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias veritatis voluptas autem accusantium sed incidunt natus ullam ea laborum repellat?"]
]

const carpetaimg= "img/";
let indice=0;

document.querySelector("img").src=carpetaimg+datos[indice][1];
document.querySelector("img").alt=datos[indice][0];
document.querySelector("h2").innerText=datos[indice][0];
document.querySelector("span").innerText=datos[indice][2];
document.querySelector("h4").innerText=indice
document.querySelector("p").innerText=datos[indice][3]

function siguiente(){
    

    document.querySelector("img").src=carpetaimg+datos[indice][1];
    document.querySelector("img").alt=datos[indice][0];
    document.querySelector("h2").innerText=datos[indice][0];
    document.querySelector("span").innerText=datos[indice][2];
    document.querySelector("h4").innerText=indice
    document.querySelector("p").innerText=datos[indice][3]
    
    indice++;

    if(indice>datos.length-1){
        indice=0;
    }
}
setInterval(siguiente, 2000);