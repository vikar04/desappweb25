let datos=[
    ["pepe", "1234"],
    ["Lupe", "asdf"]
]

function verificar(){
    let use = document.getElementById("user").value
    let cont = document.getElementById("pass").value

    let errorMsg = "";

    // Validar si los campos están vacíos
    if (!use || !cont) {
        errorMsg += "Por favor, ingresa usuario y contraseña.";
        alert(errorMsg)
        return;
    }
    for(i=0; i<datos.length; i++){
        
        if(use==datos[i][0]){
            if(cont==datos[i][1]){
                errorMsg +="Inicio de sesion correcto";
                alert(errorMsg)
                return;
            }else{
                errorMsg +="Datos introducidos incorrectos";
                alert(errorMsg)
                return;
            }
        }
    }
    errorMsg += "Datos no encontrados";
    alert(errorMsg)
}