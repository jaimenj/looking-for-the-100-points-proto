'use strict';
(function ($) {

    // DOM ready..
    $(function () {
        console.log('Loading main.js..')

        // Multilevel dropdown menu normal..
        if (screen.availWidth >= 990) {
            $('body').on('mouseover', '.dropdown-item', function (e) {
                //e.preventDefault();
                if ($(this).closest('.menu-item').hasClass('menu-item-has-children')) {
                    $(this).siblings().find('.dropdown-menu').removeClass("show");
                    $(this).next('.dropdown-menu').addClass("show");
                } else {
                    $(this).parent().siblings().find('.dropdown-menu').removeClass("show");
                }
            });
        } else {
            /* NOT FINE BEHAVIOUR.. // Menu collapsed and expanding..
            $('body').on('click', '.dropdown-item', function (e) {
                if (e.originalEvent.detail > 1) {
                    // If comes from dblclick goes out..
                    return;
                }
                var currentMenuItem = this;
                e.preventDefault();
                setTimeout(function () {
                    $(currentMenuItem).parents('.menu-item').addClass('show');
                    $(currentMenuItem).parents('.dropdown-menu').addClass('show');
                }, 2, currentMenuItem);
                if ($(this).closest('.menu-item').hasClass('menu-item-has-children')) {
                    if ($(this).next('.dropdown-menu').hasClass('show')) {
                        $(this).next('.dropdown-menu').removeClass("show");
                    } else {
                        $(this).siblings().find('.dropdown-menu').removeClass("show");
                        $(this).next('.dropdown-menu').addClass("show");
                    }
                } else {
                    $(this).parent().siblings().find('.dropdown-menu').removeClass("show");
                }
            });
            // Do dlbclick to go to the page if it isn't a #..
            $('body').on('dblclick', '.dropdown-item', function (e) {
                if ($(this).prop('href') != '#') {
                    window.location.href = $(this).prop('href');
                }
            });*/
            $('.menu-item.menu-item-has-children').addClass('show');
            $('.menu-item.menu-item-has-children .dropdown-menu').addClass('show');
        }
    });

    $('body').on('click', 'a[href="#"]', function (e) {
        e.preventDefault();
    });

    $('body').on('click', '.carousel-item-home', function () {
        window.location.href = $(this).data('url');
    });

})(jQuery);