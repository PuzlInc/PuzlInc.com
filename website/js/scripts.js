/*global $, jQuery*/

$(function () {
    "use strict";
    
    $(".slider").slider({interval: 8000, fade: true});

    $("#nav-slider").click(function () {
        $(".nav-links").slideToggle();
    });

    $(window).resize(function () {
        if ($(this).width() > 752) { $(".nav-links").show(); }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // Animate the scroll to top
    $('.go-top').click(function (event) {
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);
    });
});