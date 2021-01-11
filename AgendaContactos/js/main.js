const formularioContactos = document.querySelector('#');

eventListener();

function eventListener(){
     // cuando el formulario de editar o crear se ejecuta
     formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e){
     e.preventDefault();
     
     // leer los datos de los imputs
     const nombre = document.querySelector('#nombre').value;
     const empresayy = document.querySelector('#empresa').value;
     const telefono = document.querySelector('#telefono').value;
     const accion = document.querySelector('#accion').value;

     if(nombre === '' || empresa === '' || telefono === ''){
          // dos parametros texto y clase
          mostrarNotificacion('Todos los campos son obligatorios', 'error');
     }else{
          // para la validación, crear llamando a Ajax
          const infoContacto = new FormData();
          infoContacto.append('nombre', nombre);
          infoContacto.append('empresa', empresa);
          infoContacto.append('telefono', telefono);
          infoContacto.append('accion', accion);

          if(accion === 'crear'){
               // creamos un nuevo contacto
               insertarBD(infoContacto);
          }else{
               // editar el contacto
          }
     }

     // insertar BD via Ajax
     function insertarBD(datos){
          // llamado a ajax

          // crear el objeto
          const xhr = new XMLHttpRequest();

          //abrir la conexión
          xhr.open('POST', 'inc/modelos/modelo-contacto.php', true);

          // pasar los datos
          xhr.onload = function(){
               if(this.status === 200 ){
                    console.log(JSON.parse(xhr.responseText));
                    // leemos la respuesta de php
                    const respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta.empresa);
               }
          }

          //envair los datos
     }

     // notificación en pantall
     function mostrarNotificacion(mensaje, clase){
          const notificacion = document.createElement('div');
          notificacion.classList.add(clase, 'notificacion', 'sombra');
          notificacion.textContent = mensaje;

          // formularioo
          formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

          // ocultar y mostrar la notificación
          setTimeout(() => {
               notificacion.classList.add('visible');
               setTimeout(() => {
                    notificacion.classList.remove('visible');
                    setTimeout(() => {
                         notificacion.remove();
                    }, 500);
                    
               }, 3000);
          }), 100;
     }
}