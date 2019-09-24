/* global $ */

/* eslint-env jquery */

$(document).ready(function () {

    /*sticky navigation*/
    var waypoint = new Waypoint({
        element: document.getElementById('section-features'),
        handler: function (direction) {
            if (direction === "down")
                $('nav').addClass("sticky");
            else
                $('nav').removeClass("sticky");
        },
        offset: '60px'
    });


    /*scroll on buttons
    $('.js--scroll-to-plans').click(function () {
        $('html, body').animate({
            scrollTop: $('.js--section-plans').offset().top
        }, 1000);
    });

    $('.js--scroll-to-start').click(function () {
        $('html, body').animate({
            scrollTop: $('.js--section-features').offset().top
        }, 1000);
    });
*/

    /*animations on scroll*/

    var waypoint = new Waypoint({
        element: document.getElementById('wp1'),
        handler: function () {
            $('.js--wp1').addClass("animated fadeIn");
        },
        offset: '50%'
    });

    var waypoint2 = new Waypoint({
        element: document.getElementById('wp2'),
        handler: function () {
            $('.js--wp2').addClass("animated fadeInUp");
        },
        offset: '50%'
    });

    var waypoint3 = new Waypoint({
        element: document.getElementById('section-cities'),
        handler: function () {
            $('.js--wp3').addClass("animated fadeIn");
        },
        offset: '50%'
    });

    var waypoint4 = new Waypoint({
        element: document.getElementById('wp4'),
        handler: function () {
            $('.js--wp4').addClass("animated pulse");
        },
        offset: '50%'
    });


    /*Mobile nav*/
    $('.js--nav-icon').click(function () {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');

        nav.slideToggle(200);

        if (icon.hasClass('ion-md-menu')) {
            icon.removeClass('ion-md-menu');
            icon.addClass('ion-md-close');
        } else {
            icon.addClass('ion-md-menu');
            icon.removeClass('ion-md-close');
        }
    });

})
