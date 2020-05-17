$(document).ready(function() {
    $(window).on('scroll', function() {
        fixHeaderLogo();
    });
    fixHeaderLogo();
});

$('.volunteer-carousel').owlCarousel({
    loop: true,
    responsive: {
        0: {
            items: 1
        },
        800: {
            items: 3
        },
    }
});

$('.construction-carousel').owlCarousel({
    loop: false,
    responsive: {
        0: {
            items: 1
        },
        455: {
            items: 2
        },
        655: {
            items: 3
        },
        855: {
            items: 4
        },
        1055: {
            items: 5
        },
    }
});

$('.quotes-carousel').owlCarousel({
    loop: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
    }
});

lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'albumLabel': '%1 / %2',
    'fadeDuration': 200
})

function fixHeaderLogo() {
    var scroll = $(window).scrollTop();
    var upperNavHeight = $('.upper-nav').outerHeight();

    if (scroll < 0) {
        return;
    }

    // scroll szazaleka
    if (scroll <= upperNavHeight) {
        var percent = scroll / upperNavHeight;
    } else {
        var percent = 1;
    }

    $('.logo').css('top', -(percent * upperNavHeight));
    // 80 pixel a jelenlegi kep meret, 20-al kell kevesebb
    $('.logo img').css('width', 80 - (percent * 20));
    // 15 pixel a jelenlegi, es 27-el kell novelni
    $('.logo img').css('margin-top', 15 + (percent * 27));
}