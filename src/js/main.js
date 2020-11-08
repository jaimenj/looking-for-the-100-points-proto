'use strict';

var debug = true;
(function ($) {

    // DOM ready..
    $(function () {
        console.log('Loading main.js..');

        registerServiceWorker();
        updateCacheWithCurrentUrl();
        doTasksForMailchimpPopupFrom();

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

        $('body').on('click', 'a[href="#"]', function (e) {
            e.preventDefault();
        });

        $('body').on('click', '.carousel-item-home', function () {
            window.location.href = $(this).data('url');
        });

    });

})(jQuery);

function registerServiceWorker() {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                if (debug) console.log('Service worker updated successfully!');
                newSWRegistration = registration;
            })
            .catch(err => {
                if (debug) console.log('ERROR: Service worker NOT registered..', err)
            });

        //navigator.serviceWorker.getRegistrations().then(function(registrations) {
        //    for (let registration of registrations) {
        //        registration.unregister();
        //    }
        //    console.log('Service workers unregistered.');
        //});
    }
}

function doTasksForMailchimpPopupFrom() {
    if (localStorage.mailchimpFormClosed) {
        localStorage.mailchimpFormClosed = Number(localStorage.mailchimpFormClosed) + 1;
        if (localStorage.mailchimpFormClosed > 10) {
            localStorage.removeItem("mailchimpFormClosed");
        }
    }

    // Mailchimp form is shown or not.
    if (!localStorage.mailchimpFormSubmited && !localStorage.mailchimpFormClosed) {
        if (debug) console.log('NOT submited and not closed, popup form will be shown.');
        setTimeout(() => {
            if (document.getElementById('myMailchimpModal')) {
                document.getElementById('myMailchimpModal').classList.remove('my-modal-normal');
                document.getElementById('myMailchimpModal').classList.add('my-modal-centered');
                document.getElementById('boxclose').classList.add('boxclose');
            }
        }, 30000);
    } else {
        if (debug) console.log('Submitted or closed, setted for non popup form.');
    }

    // For closing Mailchimp form.
    if (document.getElementById("boxclose")) {
        document.getElementById("boxclose").addEventListener("click", () => {
            if (document.getElementById('myMailchimpModal')) {
                document.getElementById('myMailchimpModal').classList.add('my-modal-normal');
                document.getElementById('myMailchimpModal').classList.remove('my-modal-centered');
                document.getElementById('boxclose').classList.remove('boxclose');
            }
            localStorage.mailchimpFormClosed = 1;
        });
    }
}

function setMailchimpFormSubmited() {
    localStorage.mailchimpFormSubmited = 1;
}

function updateCacheWithCurrentUrl() {
    if (navigator.onLine) {
        if (debug) console.log('Updating Cache Storage: ' + document.location.href);
        caches.keys().then(key => {
            caches.open(key).then(theCache => {
                theCache.delete(document.location.href).then(() => {
                    if (debug) console.log('Item deleted into Cache Storage..');
                    theCache.add(document.location.href).then(() => {
                        if (debug) console.log('Item added into Cache Storage..');
                    }).catch(() => {
                        if (debug) console.log('ERROR adding current URL to the Cache Storage..');
                    });
                }).catch(() => {
                    if (debug) console.log('Item NOT delete..');
                });
            });
        });
    } else {
        if (debug) console.log('Cache Storage NOT updated: ' + document.location.href);
    }
}