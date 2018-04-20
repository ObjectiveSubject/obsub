/**
 * Back to top link behavior
 */

(function (window, $) {

    console.log('test');

    var $body = $('body'),
        windowHeight = window.innerHeight;

    OS.scrollCallbacks.push(function (scrollTop, scrollDelta) {

        if (scrollTop > windowHeight / 2 && scrollDelta < 0) {
            $body.addClass('page-has-scrolled');

        } else {

            $body.removeClass('page-has-scrolled');

        }

    });

})(this, jQuery);