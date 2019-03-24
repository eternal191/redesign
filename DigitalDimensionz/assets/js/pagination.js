(function ($) {
    var behind = $('.nav-btns .prev a');
    var forward = $('.nav-btns .next a');

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
             '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-0.html',
             '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1.html',
             '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-2.html',
             '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-3.html',
             '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-4.html'
        ];
        var newUrl = prev(document.location.pathname, pages);
        window.open(newUrl, '_self');

    });

    forward.on('click', function () {
        var pages = [
              '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-0.html',
              '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1.html',
              '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-2.html',
              '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-3.html',
              '/redesign/Digitaldimensionz/pages/portfolio/portfolio-single-1-4.html'
        ];
        var newUrl = next(document.location.pathname, pages);
        window.open(newUrl, '_self');

    });

})($);