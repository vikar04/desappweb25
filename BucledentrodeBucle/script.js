let valor = 1;
let libreta = '';
for (j = 0; j <= 12; j++) {
    libreta += `<ul><h4>Tabla del ${j}</h4>`;
    for (i = 0; i <= 10; i++) {
        libreta += `<li>${j} x ${i} = ${j * i}</li>`
    }
    libreta += '</ul>';
}
document.body.innerHTML = libreta;