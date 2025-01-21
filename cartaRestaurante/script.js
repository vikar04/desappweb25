const menu = [
    {nombre: 'Hummus de Tomate',
        descripcion: 'acompañado de almendras tostadas, pesto genovese, olio al peperonciono',
        precio: 9,
        activo: true,
        alergenos:['almendra', 'frutos secos']
    },
    {nombre: 'Patatas asadas',
        descripcion: 'Con fiambre de Porchetta, acompañado de mayonesa',
        precio: 11,
        activo: false,
        alergenos:['manteca']
    },
    {nombre: 'Fabada Asturiana',
        descripcion: 'Guiso tradicional con fabes, chorizo, morcilla y tocino',
        precio: 15,
        activo: true
    },
    {nombre: 'Cachopo',
        descripcion: 'Filete de carne relleno de jamón y queso, empanado y frito, acompañado de patatas fritas',
        precio: 18,
        activo: false
    },
    {nombre: 'Arroz con Leche',
        descripcion: 'Postre tradicional asturiano, arroz con leche condensada, canela y limón',
        precio: 6,
        activo: false
    },
    {nombre: 'Tortos de Maíz',
        descripcion: 'Tortas hechas a base de harina de maíz, servidas con queso, chorizo o picadillo',
        precio: 8,
        activo: true
    },
    {nombre: 'Sidra Asturiana',
        descripcion: 'Bebida alcohólica elaborada a partir de manzanas autóctonas, servida en escanciadores',
        precio: 4,
        activo: false
    }
];


let libreta='<ul>';

for(i=0;i<menu.length; i++){
    if(menu[i].activo){
        libreta+=`<li><strong>${menu[i].nombre}</strong><p>
        ${menu[i].descripcion}</p>
        <span>${menu[i].precio},00€ </span></li>`;
    }
 
}
libreta+='</ul>';
document.body.innerHTML=libreta;
