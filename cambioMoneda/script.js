let conversion = 0.97;

function cambiar(){
    let cantidad = document.getElementById("num").value;
    let vuelto = cantidad/conversion;
    document.getElementById("usa").src="imagenes/usa_flag.png"
    document.querySelector("h2").innerHTML="Resultado de la conversion a $:"
    vuelto= vuelto.toFixed(2);
    document.getElementById("cant_convertida").innerHTML=vuelto+"$";
}