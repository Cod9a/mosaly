<!DOCTYPE html>
<html lang="{{ $current_locale }}">
	<head>
		<title>@yield('title') &bull; Mosaly</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="@yield('description')">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/favicon.png') }}" type="image/png">

		<link rel="apple-touch-icon" sizes="128x128" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/touch/mosa128.png') }}">
		<link rel="apple-touch-icon" sizes="256x256" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/touch/mosa256.png') }}">
		<link rel="apple-touch-icon" sizes="512x512" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/touch/mosa512.png') }}">

		<link rel="manifest" href="/manifest.json">
		<meta property="og:title" content="@yield('description')">
		<meta property="og:site_name" content="Mosaly.fr">
		<meta property="og:language" content="fr">
		<meta name="twitter:author" content="@mosaly">

		<meta name="theme-color" content="#FFE8B5">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/bootstrap4/bootstrap.min.css') }}">

		<!-- Font Awesome -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">

        <!-- Owl Carousel -->
		<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/OwlCarousel2-2.2.1/animate.css') }}">
	
		<!-- Sweet alert -->	
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!-- JQuery -->
		<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/jquery-3.2.1.min.js') }}"></script>

		<!-- Toastr -->
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/custom.css') }}">

		@yield('customStyles')

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-0S43XE3K82"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-0S43XE3K82');
		</script>
	</head>

	@if ($message = Session::get('success'))
	    <script>
	        toastr.options.timeOut = 6000;
	        toastr.success("{{ $message }}");
	    </script>
	@endif