$(function(){
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();

        var enlaces = $(this).attr('href');
        $(enlaces).fadeIn(2000);

        return false;
    });


    // Animación de jQuery animateNumber
    $('.resumen-evento li:first p').animateNumber({number: 6}, 1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1600);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1200);
});