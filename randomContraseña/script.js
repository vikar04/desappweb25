function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

const letrasMinusculas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
    'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

const letrasMayusculas = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

const simbolosEspeciales = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+',
    '[', ']', '{', '}', '\\', '|', ';', ':', "'", '"', ',', '.', '/', '<', '>', '?', '~', '`'];
const numeros = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

// const alldigits = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n',
//     'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
//     'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '@',
//     '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '\\', '|', ';', ':',
//     "'", '"', ',', '.', '/', '<', '>', '?', '~', '`', "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]

function generarPass(){
    let long= document.getElementById("num").checked;
    let pass="";
    let minus=document.getElementById("min").checked;
    let mayus=document.getElementById("may").checked;
    let numer=document.getElementById("numb").checked;
    let simb=document.getElementById("sim").checked;
    console.log(simb);
    let digits=[];
    if(minus=="on"){
       digits= digits.concat(letrasMinusculas);
    }
    if(mayus=="on"){
        digits= digits.concat(letrasMayusculas);
    }
    if(numer=="on"){
        digits=digits.concat(numeros);
    }
    if(simb=="on"){
        digits= digits.concat(simb);
    }

    if((minus!="on") && (mayus!="on") && (numer!="on") && (simb!="on")){
        alert("Debes marcar al menos una casilla");
    }else{

    
    for(i=0;i<long;i++){
        pass+=digits[aleatorio(0,digits.length-1)]
    }
    document.querySelector("p").innerHTML= pass;
}
}