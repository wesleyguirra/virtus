$(document).ready(function(){
       
//:::::::::::::::::::::::::::::::::::::::::::::::::::::
//::                  Menu mobile                    ::
//:::::::::::::::::::::::::::::::::::::::::::::::::::::
    
    $('#mobile-anchor').on('click touchStart', function(e){
        $('html').toggleClass('menu-active');
        $('menu, section, footer').css('transition','.25s linear');
        e.preventDefault();
    });
    
    $('#mobile-anchor').on('click touchStart', function(e){
        e.stopPropagation();
    });
    
    $("section, footer").on('click touchStart', function(){
        $('html').removeClass('menu-active');
    });
    
//:::::::::::::::::::::::::::::::::::::::::::::::::::::
//::               Animação rodapé                   ::
//:::::::::::::::::::::::::::::::::::::::::::::::::::::

    $('#links').hide();
    $('#more-links a').click(function(){
        $('#links').slideToggle();
        $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
    });
    
//:::::::::::::::::::::::::::::::::::::::::::::::::::::
//::             Navegação por abas                  ::
//:::::::::::::::::::::::::::::::::::::::::::::::::::::
    
    $('.tab-content').hide();
    $('.tab-content:eq(0)').show();
    $('.ni:eq(0)').addClass('ni-active');
    $('.ni').click(function(e){
        e.preventDefault();
        var i = $(this).index();
        $('.ni').removeClass('ni-active');
        $(this).addClass('ni-active');
        $('.tab-content').hide();
        $('.tab-content:eq('+i+')').fadeIn();
    });

});