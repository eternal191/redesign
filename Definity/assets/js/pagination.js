(function ($) {

    $('.nav-btns a').on('click', function (e) {

        function getUrlParam(name) {
            var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return (results && results[1]) || undefined;
        }

        var currentPAge = parseInt(getUrlParam('page'));


        console.log('current URL--->>>>>', currentPAge);

        if ( $(this).parent().hasClass('next') ){
            if (currentPAge == 3) {
                window.open('portfolio-single-1.html')
            } else {
                currentPAge++;
                console.log('next URL--->>>>>', currentPAge);

                window.open('portfolio-single-1-' +currentPAge+ '.html?page=' +currentPAge, '_self');
            }
        } else if ($(this).parent().hasClass('prev')) {
            if (currentPAge == 1) {
                window.open('portfolio-single-1-3.html')
            } else {
                currentPAge--;
                console.log('next URL--->>>>>', currentPAge);

                window.open('portfolio-single-1-' +currentPAge+ '.html?page=' +currentPAge, '_self');
            }
        }

    });

})($);