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
    $('.resumen-evento li:first p').animateNumber({number: 6}, 5200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 5200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 5600);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 5200);


    // Animación de jQuery countdown
    $('.cuenta-regresiva').countdown('2020/12/31 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    // Animación de jQuery lettering
    $('.nombre-sitio').lettering();


    // Animación menu fijo barra superior
    var windowHeight = $(window).height();
    var barrAltura = $('.barra').innerHeight();
    
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();

        if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barrAltura + 'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });


    // Menu móvil 
    $('.menu-movil').on('click', function(){
        $('.navegacion-principal').slideToggle();
    });
});