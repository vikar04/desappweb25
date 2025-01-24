const preguntas = [
    ["Cual es el sentido de la vida?", ["el chocolate", "la familia", "el dinero", "tortuga"], 3],
    ["Cuanto es 1+1", ["2", "3", "1"], 0],
    ["Que color es el cielo en un día claro?", ["Azul", "Rojo", "Verde", "Amarillo"], 0],
    ["Cuanto es 5 x 5?", ["10", "20", "25", "30"], 2],
    ["Quien pintó la Mona Lisa?", ["Pablo Picasso", "Vincent Van Gogh", "Leonardo da Vinci", "Salvador Dalí"], 2],
    ["Qué animal es conocido por su largo cuello?", ["Elefante", "Jirafa", "León", "Tigre"], 1],
    ["Cuál es el continente más grande?", ["África", "Asia", "Europa", "América"], 1],
    ["Cuántos días tiene un año?", ["360", "365", "366", "380"], 1],
    ["Quién escribió 'Cien años de soledad'?", ["Gabriel García Márquez", "Mario Vargas Llosa", "Isabel Allende", "Jorge Luis Borges"], 0]
];

function generarTest() {
    let cuest="<ol>"
    for (i = 0; i < preguntas.length; i++) {
        cuest+=`<li><h3>${preguntas[i][0]}</h3>`;
        for(j=0;j<preguntas[i][1].length; j++){
            cuest+=`<input type="radio" name="p${i}" id="p${i}${j}">`;
            cuest+=`<label for="p${i}${j}">${preguntas[i][1][j]}</label>`;
            cuest+=`<br>`;
        }
        cuest+=`</li>`;
    }
    cuest+=`</ol>`
    document.querySelector("section").innerHTML=cuest;
}

generarTest();

function corregir(){
     let nota=0;
     for(i=0;i<preguntas.length; i++){
        let verificacion=document.getElementById('p'+i+''+preguntas[i][2]).checked;
        if (verificacion){
            nota++;
        }
    }
    document.querySelector("span").innerHTML=nota+"/"+preguntas.length;
}