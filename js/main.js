'use strict';
(function ($) {

    // DOM ready..
    $(function () {
        console.log('Loading main.js..')

        // Multilevel dropdown menu..
        $('body').on('mouseover', '.dropdown-item', function () {
            if ($(this).closest('.dropdown').hasClass('menu-item-has-children')) {
                $(this).parent().find('.dropdown-menu').removeClass("show");
                $(this).next('.dropdown-menu').addClass("show");
            }
        });
    });

    $('body').on('click', 'a[href="#"]', function (e) {
        e.preventDefault();
    });

})(jQuery);