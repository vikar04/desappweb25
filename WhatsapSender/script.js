function enviar() {
    let url = "https://wa.me/"
    let miMensaje = document.getElementById("mensaje").value;
    let num = document.getElementById("numero").value;

    if (num == "" || miMensaje == "") {
        alert("Rellena todos los campos")
    } else {
        url += num + "?text=" + miMensaje;
        document.querySelector("p").innerHTML = url;
        window.open(url);//pagina nueva
        //window.location.href=url //abrir en la misma ventana
    }
}