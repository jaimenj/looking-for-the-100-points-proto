// LFT100P Service Worker
'use strict';

const debug = false;
const cacheName = 'lft100p-cache-v1';
const offlinePage = '/pwa/offline.html';
const errorPage = '/pwa/error.html';
const initialAssets = [
    '/',
    offlinePage,
    errorPage,
    '/pwa/icon-36x36.png',
    '/pwa/icon-48x48.png',
    '/pwa/icon-72x72.png',
    '/pwa/icon-96x96.png',
    '/pwa/icon-144x144.png',
    '/pwa/icon-192x192.png',
    '/pwa/icon-384x384.png',
    '/pwa/icon-512x512.png'
];
const cacheMaxItems = 100;

const limitCacheSize = (theCacheName, maxSize) => {
    caches.open(theCacheName).then(cache => {
        cache.keys().then(keys => {
            //console.log('Cache storage items: ', keys);
            if (debug) console.log('Keys length: ' + keys.length);
            if (keys.length > maxSize) {
                if (debug) console.log('Removing old keys..');
                for (var i = keys.length - maxSize - 1; i >= 0; i--) {
                    cache.delete(keys[i]).then(console.log('Item removed'));
                }
                if (debug) console.log('Now keys length is: ' + keys.length);
            }
        });
    });
};

self.addEventListener('install', e => {
    if (debug) console.log('Service worker installed!');
    e.waitUntil(
        caches.open(cacheName).then((cache) => {
            cache.addAll(initialAssets);
            if (debug) console.log('Installing and cached initial assets..');
        })
    );
});

self.addEventListener('activate', e => {
    if (debug) console.log('Service worker activated! Deleting old cache storages..');
    limitCacheSize(cacheName, cacheMaxItems);
    e.waitUntil(
        caches.keys().then(keys => {
            if (debug) console.log('  Current cache storages:', keys);
            return Promise.all(keys
                .filter(key => key !== cacheName)
                .map(key => caches.delete(key))
            );
        })
    );
});

self.addEventListener('fetch', e => {
    if (debug) console.log('Requested (' + e.request.url.split('/')[2] + '): ' + e.request.url);

    if (e.request.method == 'POST' ||
        e.request.url.includes('wp-admin') ||
        !(e.request.url.split('/')[2].includes('localhost') || e.request.url.split('/')[2].includes('jnjsite'))) {
        if (debug) console.log('Do nothing with: ' + e.request.method + ' ' + e.request.url);

    } else {
        if (navigator.onLine) {
            if (debug) console.log('We are online serving from cache or caching..');

            e.respondWith(
                caches.match(e.request).then(cacheRes => {
                    if (cacheRes) {
                        return cacheRes;
                    } else {
                        // If not cached, initially caching and return it..
                        return fetch(e.request).then(fetchResponse => {
                            return caches.open(cacheName).then(cache => {
                                cache.put(e.request.url, fetchResponse.clone());
                                if (debug) console.log('Caching: ' + e.request.url);
                                return fetchResponse;
                            })
                        });
                    }
                }).catch(() => {
                    if (e.request.url.indexOf('.html') > -1) {
                        return caches.match(errorPage);
                    }
                })
            );
        } else {
            if (debug) console.log('We are offline, serving from cache if possible..');

            e.respondWith(
                caches.match(e.request).then(function (response) {
                    return response || caches.match(offlinePage);
                }).catch(function () {
                    return caches.match(offlinePage);
                })
            );
        }
    }
});