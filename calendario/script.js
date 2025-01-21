const meses=[
    "enero", "febrero", "marzo", "abril", "mayo", "junio",
    "julio","agosto","septiembre","octubre","noviembre",
    "diciembre"
]
const dias=[
    "lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"
]

 let libreta='';
 let p = 0;
 for(j=0;j<=12;j++){
     libreta+=`<ul><h4>${meses[j]}</h4>`;  
     for(i=1;i<=30; i++){      
         if(p==7){
             p=0;
         }
         libreta+=`<li>${i} ${dias[p]}</li>`
         p++;
 }
 libreta+='</ul>';
 }
document.body.innerHTML=libreta;

