const meses = [
    "enero", "febrero", "marzo", "abril", "mayo", "junio",
    "julio", "agosto", "septiembre", "octubre", "noviembre",
    "diciembre"
]

let libreta = '';
let p = 0;
for (j = 0; j < 12; j++) {
    libreta += `<h3>${meses[j]}</h3>
    <table>
    <thead>
 <tr>
   <td>lunes</td>
   <td>martes</td>
   <td>miercoles</td>
   <td>jueves</td>
   <td>viernes</td>
   <td>sabado</td>
   <td>domingo</td>
 </tr>
</thead>
<tbody>
<tr>`
    for (i = 1; i <= 30; i++) {
        if (p == 7) {
            p = 0;
            libreta += `</tr><tr>`
        }
        libreta += `<td>${i}</td>`
        p++;
    }
    libreta += '</tr></tbody>';
    p = 0;
    libreta+=`</table>`
}
document.body.innerHTML = libreta;