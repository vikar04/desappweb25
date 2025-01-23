function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
  }

function cambioC() {
    let numero1 = aleatorio(0, 100);
    let numero2 = aleatorio(0, 100);
    let numero3 = aleatorio(0, 100);
      
    document.body.style.background=`rgb(${numero1},${numero2},${numero3})`;
    }

cambioC();
setInterval(cambioC, 5000);