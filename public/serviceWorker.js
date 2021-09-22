/*self.addEventListener('install', function (e) {
  console.log('ServiceWorker install')
})

self.addEventListener('activate', function (e) {
  console.log('ServiceWorker activate')
})

self.addEventListener('fetch', function (event) {})
*/
self.addEventListener('install', function(e) {
    console.log('[ServiceWorker] Install');
    e.waitUntil(
      caches.open('cache_v1').then(function(cache) {
        return cache.addAll(STATIC_DATA);
      })
    );
  });

  self.addEventListener('activate', function(e) {
    console.log('[ServiceWorker] Activate');
  });

  self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request).then(function(response) {
        return response || fetch(event.request);
      })
    );
  });
