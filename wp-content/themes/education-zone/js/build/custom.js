jQuery(document).ready(function ($) {

    var rtl;

    if (education_zone_data.rtl == '1') {
        rtl = true;
    } else {
        rtl = false;
    }

    $('.testimonial-slide').owlCarousel({
        //mode: "slide",
        items: 1,
        mouseDrag: false,
        dots: false,
        nav: true,
        rtl: rtl,
    });

    $('.number').counterUp({
        delay: 10,
        time: 5000
    });

    $('.photo-gallery .gallery').addClass('owl-carousel');

    $(".photo-gallery .gallery").owlCarousel({
        items: 5,
        autoplay: false,
        loop: false,
        nav: true,
        dots: false,
        rtl: false,
        autoHeight: true,
        autoHeightClass: 'owl-height',
        mouseDrag: false,
        responsive: {
            0: {
                items: 2,
            },
            641: {
                items: 3,
            },
            768: {
                items: 4,
            },
            981: {
                items: 5,
            }
        }
    });

    $('<button class="angle-down"></button>').insertAfter($('.mobile-menu ul .menu-item-has-children > a'));
    $('.mobile-menu ul li .angle-down').on('click', function () {
        $(this).next().slideToggle();
        $(this).toggleClass('active');
    });
    //closebutton

    $('.btn-close-menu').on('click', function () {
        $('.mobile-menu').animate({
            width: 'toggle',
        });
        $('body').removeClass('menu-open');
    });

    $('.mobile-header .menu-opener').on('click', function () {
        $('.mobile-menu').animate({
            width: 'toggle',
        });
        $('body').addClass('menu-open');
    });

    $('.footer-overlay').on('click', function () {
        $('.mobile-menu').animate({
            width: 'toggle',
        });
        $('body').removeClass('menu-open');
    });

    //accessibility menu
    $("#site-navigation ul li a").on('focus', function () {
        $(this).parents("li").addClass("focus");
    }).on('blur', function () {
        $(this).parents("li").removeClass("focus");
    });

    $("#secondary-navigation > a").on('focus', function () {
        $(this).parents("#secondary-navigation").addClass("focus");
    }).on('blur', function () {
        $(this).parents("#secondary-navigation").removeClass("focus");
    });

    $("#secondary-navigation ul li a").on('focus', function () {
        $(this).parents("#secondary-navigation").addClass("focus");
    }).on('blur', function () {
        $(this).parents("#secondary-navigation").removeClass("focus");
    });

    $("#secondary-navigation ul li a").on('focus', function () {
        $(this).parents("li").addClass("focus");
    }).on('blur', function () {
        $(this).parents("li").removeClass("focus");
    });
    /*  Navigation Accessiblity
  --------------------------------------------- */
    $(document).on('mousemove', 'body', function (e) {
        $(this).removeClass('keyboard-nav-on');
    });
    $(document).on('keydown', 'body', function (e) {
        if (e.which == 9) {
            $(this).addClass('keyboard-nav-on');
        }
    });

});
