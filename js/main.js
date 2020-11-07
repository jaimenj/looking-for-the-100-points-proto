'use strict';
(function ($) {

    // DOM ready..
    $(function () {
        console.log('Loading main.js..')

        // Multilevel dropdown menu..
        $('body').on('mouseover', '.dropdown-item', function (e) {
            e.preventDefault();
            if ($(this).closest('.dropdown').hasClass('menu-item-has-children')) {
                $(this).siblings().find('.dropdown-menu').removeClass("show");
                //$(this).closest('.dropdown').find('.dropdown-menu').removeClass("show");
                $(this).next('.dropdown-menu').addClass("show");
            }
        });
        $('body').on('dblclick', '.dropdown-item', function (e) {
            e.preventDefault();
            if ($(this).prop('href') != '#')
                window.location.href = $(this).prop('href');
        });
    });

    $('body').on('click', 'a[href="#"]', function (e) {
        e.preventDefault();
    });

})(jQuery);