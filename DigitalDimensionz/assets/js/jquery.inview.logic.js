$(document).ready(function () {
    $('.portfolio-item.webdesing, .portfolio-item.print').on('inview', function(event, isInView) {
        if (isInView) {

            $(this).addClass('animated fadeInRight delay-2s');


        } else {
            // element has gone out of viewport
            /*$(this).removeClass('animated fadeInRight delay-2s');*/

        }
    });
});
