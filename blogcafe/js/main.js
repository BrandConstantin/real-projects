$(function(){
    'use strict';

    $('.nuestros-servicios div:first').show();
    $('.servicios nav a:first').addClass('activo');

    $('.servicios nav a').on('click', mostrarTabs);

    function mostrarTabs(){
        $('.servicios nav a').removeClass('activo');
        
        var enlace = $(this).attr('href');
        // console.log(enlace);

        // $('.nuestros-servicios div').hide();
        // $(enlace).show();
        
        $('.nuestros-servicios div').fadeOut();
        $(enlace).fadeIn();
        $(this).addClass('activo');

        return false;
    }
});