(function ($) {








    var behind = $('.nav-btns .prev');
    var forward = $('.nav-btns .next');

    function prev(current, pages) {
        var index = pages.indexOf(current);
        if (index === 0) {
            return pages[pages.length - 1];
        }
        return pages[index - 1];
    }

    function next(current, pages) {
        var index = pages.indexOf(current);
        if (index === pages.length - 1) {
            return pages[0];
        }
        return pages[index + 1];
    }

    behind.on('click', function () {
        var pages = [
             '/Digitaldimensionz_Redesign/Definity/pages/portfolio/portfolio-single-1.html',
             '/Digitaldimensionz_Redesign/Definity/pages/portfolio/portfolio-single-1-2.html',
             '/Digitaldimensionz_Redesign/Definity/pages/portfolio/portfolio-single-1-3.html'
        ];
        var newUrl = prev(document.location.pathname, pages);
        window.open(newUrl, '_self');

    });

    forward.on('click', function () {
        var pages = [
              '/Digitaldimensionz_Redesign/Definity/pages/portfolio/portfolio-single-1.html',
              '/Digitaldimensionz_Redesign/Definity/pages/portfolio/portfolio-single-1-2.html',
              '/Digitaldimensionz_Redesign/Definity/pages/portfolio/portfolio-single-1-3.html'
        ];
        var newUrl = next(document.location.pathname, pages);
        /*window.open(newUrl);*/
        window.open(newUrl, '_self');
        /*window.location.href = newUrl;*/

    });



/*
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

    });*/

})($);