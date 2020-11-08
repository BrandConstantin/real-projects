(function(){
    "use strict";

    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){
        var nombre = document.getElementById('nombre');
        var apellidos = document.getElementById('apellidos');
        var email = document.getElementById('email');
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dosdias = document.getElementById('pase_dosdias');

        // calcular
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var btnRegistro = document.getElementById('btnRegistro');
        var listaProd = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');

        // extras
        var eventos = document.getElementById('eventos');
        var etiquetas = document.getElementById('etiquetas');
        var camisas =  document.getElementById('camisa_evento');

        calcular.addEventListener('click', calcularTodo);
        pase_dia.addEventListener('change', mostrarDias);
        pase_dosdias.addEventListener('change', mostrarDias);
        pase_completo.addEventListener('change', mostrarDias);
        regalo.addEventListener("click", habilitarCalcular);
 
        function habilitarCalcular() {
            if (this.value != "") {
                calcular.removeAttribute("disabled");
            } else {
                calcular.setAttribute("disabled", true);
            }
        }

        function calcularTodo(event){
            event.preventDefault();
            
            if(regalo.nodeValue == ''){
                alert("Debes elegir un regalo!");
                regalo.focus();
            }else{
               var pasedia = parseInt(pase_dia.value, 10) || 0;
               var pasedosdias = parseInt(pase_dosdias.value, 10) || 0;
               var pasecoompleto = parseInt(pase_completo.value, 10) || 0;
               var cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;
               var cantidadCamisas = parseInt(camisas.value, 10) || 0;

               var totalPagar = (pasedia * 30) + (pasedosdias * 50) + (pasecoompleto * 110);
               totalPagar += (((cantidadCamisas * 10) * .93) + (cantidadEtiquetas * 2));
               
               
               var listadoProductos = [];
               var regaloEscogido = regalo.options[regalo.selectedIndex].text;
               
               if(pasedia >= 1){
                   listadoProductos.push('Pases por día: ' + pasedia);
               }
               if(pasedosdias >= 1){
                   listadoProductos.push('Pases por 2 días: ' + pasedosdias);
               }
               if(pasecoompleto >= 1){
                   listadoProductos.push('Pases completos: ' + pasecoompleto);
               }
               if(cantidadCamisas >= 1){
                   listadoProductos.push('Cantidad camisas: ' + cantidadCamisas);
               }
               if(cantidadEtiquetas >= 1){
                   listadoProductos.push('Cantidad etiquetas: ' + cantidadEtiquetas);
               }

                if (listaProd.length == 0) {
                    listaProd.style.display = "none";
                } else {
                    listaProd.style.display = "block";
                }
               
               listaProd.innerHTML = '';

               for(var i = 0; i < listadoProductos.length; i++){
                    listaProd.innerHTML += `<span style="font-weight:400;">${listadoProductos[i]}</span><br/>`;
               }

               if(regaloEscogido != '- Seleccion una opción -'){
                listaProd.innerHTML += '<span style="font-weight:400;">Regalo</span> ';
                listaProd.innerHTML += `${regaloEscogido}`;
                listaProd.innerHTML += '<span style="font-weight:400;"> 0€ </span>';
               }

                listaProd.style.display = 'block';

                suma.innerHTML = totalPagar.toFixed(2) + "€";

                // Validando que se haya escogido alguno de los pases para poder pagar
                if (pasedia >= 1 || pasedosdias >= 1 || pasecoompleto >= 1) {
                    btnRegistro.removeAttribute("disabled");
                } else {
                    btnRegistro.setAttribute("disabled", true);
                } 
            }             
        }

        function mostrarDias(event){
            // event.preventDefault();

            var pasedia = parseInt(pase_dia.value, 10) || 0;
            var pasedosdias = parseInt(pase_dosdias.value, 10) || 0;
            var pasecoompleto = parseInt(pase_completo.value, 10) || 0;
            let viernes = document.getElementById('viernes'),
                sabado = document.getElementById('sabado'),
                domingo = document.getElementById('domingo');

            var diasElegidos = [];


            if(diasElegidos == 0 ) {
                let todosDias = document.getElementsByClassName('contenido-dia');
                for(let i = 0; i<todosDias.length; i++) {
                    todosDias[i].style.display = 'none';
                }
            }
            if(pasedia > 0){           
                diasElegidos.push('viernes');
            }else{
                viernes.style.display = 'none';
            }
            if(pasedosdias > 0){
                diasElegidos.push('viernes', 'sabado');
            }else{
                sabado.style.display = 'none';
            }             
            if(pasecoompleto > 0){
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }else{
                domingo.style.display = 'none';
            }
            
            
            for(var i = 0; i < diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }

            // console.log(diasElegidos + " dentro función");
        }

        function validarCampos(){
            if(this.value == ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #fff'
            }
        }

        nombre.addEventListener('blur', validarCampos);
        apellidos.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarEmail);

        /*
        nombre.addEventListener('blur', function () {
        
                    if (!this.checkValidity()) {
                        error.innerHTML = nombre.validationMessage;
                    } else {
                        error.innerHTML = '';
                    }
                });
        
        apellido.addEventListener('blur', function () {
        
                    if (!this.checkValidity()) {
                        apellido.setCustomValidity('introduce tu apellido');
                        error.innerHTML = apellido.validationMessage;
                    } else {
                        error.innerHTML = '';
                    }
                });
        
        email.addEventListener('blur', function () {
        
                    if (this.validity.valueMissing) {
                        error.innerHTML = 'Introduce tu email';
                    } else if (email.validity.typeMismatch) {
                        error.innerHTML = email.validationMessage;
                    } else {
                        error.innerHTML = '';
                    }
                });
        */

        function validarEmail(event){
            var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
//     var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (emailRegex.test(this.value)) {
                errorDiv.style.display = 'none';
                this.style.border ='1px solid #cccccc';
            } else {            
                errorDiv.style.display = 'block';
                errorDiv.innerHTML= 'El correo ' + this.value +' es inválido.';
                this.style.border ='1px solid red';
                errorDiv.style.border ='1px solid red';
                this.focus();            
            }
        }   
    });
})();