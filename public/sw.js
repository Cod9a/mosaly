self.addEventListener('install', e => {
	e.waitUntil(
		caches.open("static").then(cache => {
			return cache.addAll(["./", "./main_styles.css", "./responsive.css", "./images/touch/mosa192.png"])
		})
	)
})

// self.addEventListener('fetch', e => {
// 	e.respondWith(
// 		caches.match(e.request).then(response => {
// 			return response || fetch(e.request)
// 		})
// 	)
// })