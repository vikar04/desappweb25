function pedir(){
    let cantidad = document.getElementById("num").value;
    let lugar=document.getElementById("evento").value
    let valor=0;
    let miHTML="";
    if(lugar=="la Cream Fields"){
        valor = 100;
    }else if(lugar=="el Show de Circo"){
        valor = 40;
    }else if(lugar=="el Estreno de Avatar 3"){
        valor = 20;
    }
    else if(lugar=="el Estreno de Avatar 3"){
        valor = 20;
    }else if(lugar=="la Opera"){
        valor = 80;
    }
    valor = valor*cantidad;

    miHTML="<h2> Su pedido de "+cantidad+" entradas para <em>"+lugar+"</em> con un valor de "+valor+"€ ha sido completado</h2>";
    
    
    
    document.querySelector("span").innerHTML=miHTML;
    
    
}