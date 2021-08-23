//tarjeta1
const carta = document.querySelector('#carta');
const verMas = document.querySelector('#verMas');
const regresar = document.querySelector('#regresar');


verMas.addEventListener('click', (e)=>{        
    carta.classList.add('activo');
});


regresar.addEventListener('click', (e)=>{      
     carta.classList.remove('activo');
});

//tarjeta2
const carta2 = document.querySelector('#carta2');
const verMas2 = document.querySelector('#verMas2');
const regresar2 = document.querySelector('#regresar2');


verMas2.addEventListener('click', (e)=>{     
     carta2.classList.add('activo');
});


regresar2.addEventListener('click', (e)=>{        
     carta2.classList.remove('activo');
});










