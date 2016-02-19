( function( $ ) {
    $( document ).ready(function() {
        if(screen.width < 767)
        {
            $('#megamenu > li > a').click(function() {
                $('#megamenu li').removeClass('menu-active');
                $(this).closest('li').addClass('menu-active');
                var checkElement = $(this).next();
                if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('menu-active');
                    checkElement.slideUp('fast');
                }
                if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('fast');
                    checkElement.slideDown('fast');
                }
                if($(this).closest('li').find('ul').children().length == 0) {
                    return true;
                } else {
                    return false;
                }
            });
        }

    });
} )( jQuery );