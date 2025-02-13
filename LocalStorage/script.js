let total = 0;
let catalogo = [
    ["Manzana", 10, "https://andreuprados.com/wp-content/uploads/2017/01/apple_0.jpg.webp"],
    ["Peras", 15, "https://www.gob.mx/cms/uploads/article/main_image/68008/Pera_secundaria.jpg"],
    ["Platanos", 20, "https://ecosdelatierra.es/wp-content/uploads/2021/01/Platano-de-Canarias-Ecologico.jpg"]
]

miHtml = "<ul>";
for (i = 0; i < catalogo.length; i++) {
    miHtml += "<li class='producto'><h3>" + catalogo[i][0] + "</h3>";
    miHtml += "<p>Precio: " + catalogo[i][1] + " €</p>";
    miHtml += "<img src='" + catalogo[i][2] + "' alt='" + catalogo[i][0] + "'>";
    miHtml+= "<button onclick='agregar("+catalogo[i][1]+")'>Añadir</button></li>"
}
miHtml += "</ul>";
document.getElementById('catalogo').innerHTML=miHtml;

if (localStorage.getItem('miTotal')) {
    total = parseInt(localStorage.getItem('miTotal'))//parseInt para no concadenar
    mostrar();
}

function agregar(precio) {
    total = total + precio;
    localStorage.setItem('miTotal', total);
    mostrar();
}

function vaciar() {
    total = 0;
    localStorage.removeItem('miTotal');
    mostrar();
}

function mostrar() {
    document.querySelector('#total').innerHTML = total + ",00";
}