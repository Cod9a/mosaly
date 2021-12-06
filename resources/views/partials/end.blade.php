<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/files/main.js') }}"></script>
<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/easing/easing.js') }}"></script>
<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/custom.js') }}"></script>

<script type="text/javascript">
	const reserved = document.querySelectorAll('.reserved')
	Array.from(reserved).forEach(function (element) {
        element.addEventListener('click', function (e) {
            Swal.fire({
			  title: "{{ \App::isLocale('fr') ? 'Où voulez-vous réserver un appartement?' : 'Where do you want to book an apartment?' }}",
			  showDenyButton: true,
			  confirmButtonText: "{{ \App::isLocale('fr') ? 'A l\'hôtel PK10' : 'In the hotel PK10' }}",
			  denyButtonText: "{{ \App::isLocale('fr') ? 'A la résidence CABOMA' : 'At the residence CABOMA' }}",
			  background: 'rgba(255, 255, 255, 0.93)',
			  customClass: {
				  confirmButton: 'mosaReserve',
				  denyButton: 'mosaReserve',
			  }
			}).then((result) => {
			  if (result.isConfirmed) {
			  	window.open('https://direct-book.com/properties/hotelmosalydirect', '_blank');
			  } else if (result.isDenied) {
			    window.open('https://direct-book.com/properties/residencemosalydirect', '_blank');
			  }
			})
            e.preventDefault;
        })
    })
</script>

<script type="text/javascript">
	const reserved2 = document.querySelectorAll('.reserveLocal')
	Array.from(reserved2).forEach(function (element) {
        element.addEventListener('click', function (e) {
            Swal.fire(
            	'Pour toute réservation de salle, veuillez nous contacter au (+229) 21 31 76 30'
            )
        })
    })
</script>

<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="3372428c-8cee-40f3-86f1-bf4a53a8acc3";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>

<script type="text/javascript">
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	    anchor.addEventListener('click', function (e) {
	        e.preventDefault();

	        document.querySelector(this.getAttribute('href')).scrollIntoView({
	            behavior: 'smooth'
	        });
	    });
	});
</script>

@yield('customScripts')