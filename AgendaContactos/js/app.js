const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners(){
    // cuando el formulario se ejecuta (editar y crear)
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e){
    e.preventDefault();

    // leer los datos de los inputs
    const nombre = document.querySelector('#nombre').value;
    const empresa = document.querySelector('#empresa').value;
    const telefono = document.querySelector('#telefono').value;
    const accion = document.querySelector('#accion').value;

    if(nombre === '' || empresa === '' || telefono === ''){
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
    }else{
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        /*
        console.log(...infoContacto);
        */

        if(accion === 'crear'){
            // crear contacto
            insertBD(infoContacto);
        }else{
            // editar contacto

        }
    }
}

// insertar en la BD con Ajax
function insertBD(datos){
    // crear objeto
    const xhr = new XMLHttpRequest();

    // abrir conexión
    xhr.open('POST', 'inc/model/model-contact.php', true);

    // pasar los datos
    xhr.onload = function(){
        if(this.status === 200){
            // console.log(JSON.parse(xhr.response));
            // leemos respuesta php
            const respuesta = JSON.parse(xhr.responseText);
            // console.log(respuesta.empresa);
        }
    }

    // envair los datos
    xhr.send(datos);
}

// notificación en pantalla
function mostrarNotificacion(mensaje, clase){
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase, 'notificacion', 'sombra');
    notificacion.textContent = mensaje;

    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    // ocultar y mostrar la notificación
    setTimeout(() =>{
        notificacion.classList.add('visible');

        setTimeout(() =>{
            notificacion.classList.remove('visible');
            setTimeout(() =>{
                notificacion.remove();
            }, 500);
            
        }, 3000);
    }, 100);
}