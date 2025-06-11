self.addEventListener('install', event => {
  event.waitUntil(
    caches.open('som-cache-v1').then(cache => {
      return cache.addAll([
        '/',
        '/index.html',
        '/cambiartoken.html',
        '/consultas.html',
        '/inventario.html',
        '/login.html',
        '/mapa.html',
        '/busqueda.html',
        '/css/styles.css',
        '/js/app.js'
      ]);
    })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    })
  );
});