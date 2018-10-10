$(document).ready(function () {
    $('.portfolio-item.webdesing, .portfolio-item.print').on('inview', function(event, isInView) {
        if (isInView) {
            // element is now visible in the viewport
            console.log('is inview');

            $(this).addClass('animated fadeInRight delay-2s');


        } else {
            // element has gone out of viewport
            /*$(this).removeClass('animated fadeInRight delay-2s');*/

        }
    });
});
