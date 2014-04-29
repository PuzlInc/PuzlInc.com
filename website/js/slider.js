/*global $, jQuery*/

$.fn.slider = function (options) {
    'use strict';

    var slider,
        defaults = {
            interval: 5000,
            fade: false,
            fadeInterval: 500,
            hoverPause: true,
            hoverFade: true,
            cycle: true,
            cycleDirection: 'next'
        },
        obj = this,
        sliderItem = $(".slider-item");

    options = $.extend(defaults, options);

    this.goTo = function (newitem) {
        if (options.fade) {
            $(".slider-item.active").fadeOut(options.fadeInterval, function () {
                $(".slider-item[data-id=" + newitem + "]").fadeIn(options.fadeInterval, function () {
                    $(this).addClass('active');
                });

                $(".slider-icon.active").removeClass('active');
                $(".slider-icon[data-id=" + newitem + "]").addClass('active');
            }).removeClass('active');
        } else {
            $(".slider-item.active").hide().removeClass('active');
            $(".slider-item[data-id=" + newitem + "]").show().addClass('active');
            $(".slider-icon.active").removeClass('active');
            $(".slider-icon[data-id=" + newitem + "]").addClass('active');
        }
    };

    this.move = function (dir) {
        var length = sliderItem.length, curitem = $(".slider-item.active").data('id'), newitem;

        switch (dir) {
            case 'next':
                if (curitem === length) {
                    newitem = 1;
                } else {
                    newitem = curitem + 1;
                }
                break;
            case 'prev':
                length = sliderItem.length;
                if (curitem === 1) {
                    newitem = length;
                } else {
                    newitem = curitem + 1;
                }
                break;
        }

        obj.goTo(newitem);
    };

    this.cycle = function(){
        slider = setInterval(function () {
            obj.move(options.cycleDirection);
        }, options.interval);

        if (options.hoverPause) {
            $(this).mouseover(function () {
                clearInterval(slider);
            });

            $(this).mouseout(function () {
                slider = setInterval(function () {
                    obj.move(options.cycleDirection);
                }, options.interval);
            });
        }
    };

    this.stopCycle = function() {
        clearInterval(slider);
    };

    return this.each(function () {
        if (options.hoverFade) {
            $(this).hover(function () {
                $(".slider-text").toggleClass('fade-out');
            });
        }

        $(".right-arrow").click(function () {
            obj.move('next');
        });

        $(".left-arrow").click(function () {
            obj.move('prev');
        });

        $(".slider-icon").click(function () {
            var id = $(this).data('id'), curitem = $(".slider-item.active").data('id');
            if (id !== curitem) {
                obj.goTo(id);
            }
        });

        if (options.cycle) {
            obj.cycle();
        }
    });
};