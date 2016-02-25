/*
 * lazy load
 */

(function( $ ){

    $('img.lazy-load').each(function(){
        var $img = $(this),
            src = $img.data('src'),
            src2x = $img.data('src2x');

        if ( window.devicePixelRatio && window.devicePixelRatio > 1 && src2x ) {
            $img.attr('src', src2x);
        } else {
            $img.attr('src', src);
        }

    });

})(jQuery);
