const meses = [
    "enero", "febrero", "marzo", "abril", "mayo", "junio",
    "julio", "agosto", "septiembre", "octubre", "noviembre",
    "diciembre"
]

let libreta = '';
libreta+=`<h1>Calendario 2025</h1><ul>`
for (j = 0; j < 12; j++) {
    libreta+=`<ul class="contendor"><li>L</li>
        <li>M</li>
        <li>X</li>
        <li>J</li>
        <li>V</li>
        <li>S</li>
        <li>D</li>`
    for(i=1;i<=30;i++){
        libreta+=`<li>${i}</li>`
    }
    libreta+=`</ul>`
}
libreta+=`</ul>`
document.body.innerHTML=libreta;