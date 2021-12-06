@extends('layouts.main')

@section('title', __('Fitness et Gym'))

@section('description', 'Fitness et Gym')

@section('customStyles')

	<link href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/single_listing_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/single_listing_responsive.css') }}">
	<script src="https://unpkg.com/feather-icons"></script>

@endsection

@section('content')

	@include('includes.pageHeader')

	<!-- Title -->
	<div class="pageDescription">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="text-justify">@lang('Fitness équipé, moins cher, avec une connexion internet gratuite, des coachs expérimentés, avec le confort et le luxe, un seul choix.')</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Single Listing -->

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single_listing">
					
					<!-- Hotel Info -->

					<div class="hotel_info">

						<!-- Title -->
						<div class="hotel_title_container d-flex flex-lg-row flex-column">
							<div class="hotel_title_content">
								<h1 class="hotel_title">@lang('Fitness et Gym')</h1>
								<div class="hotel_location">@lang('PK10, voie pavée HOUDEGBE, 3ème rue à gauche (rue du caniveau), 4ème rue à droite')</div>
							</div>
							<div class="hotel_title_button ml-lg-auto text-lg-right">
								<div class="button book_button trans_200"><a href="#tarifs">@lang('Nos tarifs')<span></span><span></span><span></span></a></div>
							</div>
						</div>

						<!-- Listing Image -->

						<div class="hotel_image">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym5.jpg') }}" alt="">
						</div>

						<!-- Hotel Gallery -->

						<div class="hotel_gallery">
							<div class="hotel_slider_container">
								<div class="owl-carousel owl-theme hotel_slider">

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym2.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym2.jpg') }}" alt="jbriscoe">
										</a>
									</div>

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym3.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym3.jpg') }}" alt="grovemade">
										</a>
									</div>

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym4.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym4.jpg') }}" alt="fransaraco">
										</a>
									</div>

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym9.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym9.jpg') }}" alt="workweek">
										</a>
									</div>

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym1.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym1.jpg') }}" alt="workweek">
										</a>
									</div>

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym7.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym7.jpg') }}" alt="workweek">
										</a>
									</div>

									<!-- Hotel Gallery Slider Item -->
									<div class="owl-item">
										<a class="colorbox cboxElement" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym8.jpg') }}">
											<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym8.jpg') }}" alt="avidenov">
										</a>
									</div>
								</div>

								<!-- Hotel Slider Nav - Prev -->
								<div class="hotel_slider_nav hotel_slider_prev">
									<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
										<defs>
											<linearGradient id='hotel_grad_prev'>
												<stop offset='0%' stop-color='#6E5D38'/>
												<stop offset='100%' stop-color='#2D446E'/>
											</linearGradient>
										</defs>
										<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
										<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
										11.042,18.219 "/>
									</svg>
								</div>
								
								<!-- Hotel Slider Nav - Next -->
								<div class="hotel_slider_nav hotel_slider_next">
									<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
										<defs>
											<linearGradient id='hotel_grad_next'>
												<stop offset='0%' stop-color='#6E5D38'/>
												<stop offset='100%' stop-color='#2D446E'/>
											</linearGradient>
										</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
									M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
									C22.545,2,26,5.541,26,9.909V23.091z"/>
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
									17.046,15.554 "/>
									</svg>
								</div>

							</div>
						</div>

					</div>

					<!-- Location on Map -->

					<div class="location_on_map" id="tarifs">
						<div class="location_on_map_title">@lang('Nos tarifs')</div>
						@include('includes.tarifs')
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('includes.features')

@endsection

@section('customScripts')

	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/parallax-js-master/parallax.min.js') }}"></script>
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/single_listing_custom.js') }}"></script>
	<script>
        feather.replace()
    </script>

@endsection