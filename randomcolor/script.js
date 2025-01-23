function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function cambioC() {
    /*red*/
    let numero1 = aleatorio(0, 255);
    /*green*/
    let numero2 = aleatorio(0, 255);
    /*blue*/
    let numero3 = aleatorio(0, 255);

    document.body.style.background = `rgb(${numero1},${numero2},${numero3})`;

    document.getElementById("referencia").innerHTML = "red: " + numero1 + " <br>green: " + numero2 + " <br>blue: " + numero3 + ""
}

function cambioDiv() {


    let colorDivs = document.getElementsByClassName('color');
    let refDivs = document.getElementsByClassName('ref')
    for (let i = 0; i < colorDivs.length; i++) {
        /*red*/
        let numero1 = aleatorio(0, 255);
        /*green*/
        let numero2 = aleatorio(0, 255);
        /*blue*/
        let numero3 = aleatorio(0, 255);

        colorDivs[i].style.background = `rgb(${numero1}, ${numero2}, ${numero3})`;
        refDivs[i].innerHTML="red: " + numero1 + " <br>green: " + numero2 + " <br>blue: " + numero3 + ""
    }
    document.querySelector("li").innerHTML = "red: " + numero1 + " <br>green: " + numero2 + " <br>blue: " + numero3 + ""
}

cambioC();
cambioDiv();

setInterval(cambioC, 5000);