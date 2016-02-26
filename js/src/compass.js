/*
 * LocalData Compass
 */

(function( $, window, undefined ){

    var $ldLogo = $('.ld-logo'),
        $compass = $('img.compass'),
        angleOffset = -45,
        compassOffset;

    $(document).ready(function(){
        if ( $compass.length > 0 && Modernizr.csstransitions ) {

            compassOffset = $.extend($compass.offset(), {
                centerX: $compass.offset().left + ($compass.width() / 2),
                centerY: $compass.offset().top + ($compass.height() / 2),
            });
            console.log(compassOffset);

            $ldLogo.on("mousemove", onMouseMove);
            $ldLogo.on("mouseout", onMouseOut);
        }
    });

    function onMouseMove(e){
        var mouseX = e.pageX,
            mouseY = e.pageY,
            relativeX = mouseX - compassOffset.centerX,
            relativeY = compassOffset.centerY - mouseY,
            angle;

        if ( relativeX >= 0 ) {
            angle = getAngle(relativeX, relativeY, 0, 1) + angleOffset;
        } else {
            angle = (getAngle(relativeX, relativeY, 0, 1) * -1) + angleOffset;
        }

        console.log(angle);

        $ldLogo.addClass('mousemove');
        $compass.css({
            transform: 'rotate('+ angle +'deg)',
            webkitTransform: 'rotate('+ angle +'deg)'
        });
    }

    function onMouseOut(e){
        $ldLogo.removeClass('mousemove');
        $compass.css({
            transform: 'rotate(0deg)'
        });
    }

    function getScalar(x1,y1,x2,y2) {
        return ( x1 * x2 ) + ( y1 * y2 );
    }

    function getMagnitude(x,y) {
        return Math.sqrt( (x * x) + (y * y) );
    }

    function getAngle(x1,y1,x2,y2) {
        var scalar = getScalar(x1,y1,x2,y2);
        var magU = getMagnitude(x1,y1);
        var magV = getMagnitude(x2,y2);
        var radians = Math.acos( scalar / (magU * magV) );
        return radians * (180 / Math.PI);
    }

})(jQuery);
