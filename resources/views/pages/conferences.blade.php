@extends('layouts.main')

@section('title', __('Meetings & Events'))

@section('description', 'Salles de conférences et de fêtes à Mosaly')

@section('customStyles')

	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/elements_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/elements_responsive.css') }}">
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
					<p class="text-justify">@lang('Couvrant une superficie minimale de 300m² chacune, nos trois (03) salles de conférence / réception peuvent accueillir jusqu’à 400 convives. Elles sont toutes climatisées et équipées de tout l’équipement de sonorisation nécessaires. L’aménagement des sièges est entièrement modulable, de façon à convenir au mieux à vos besoins spécifiques.')</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Single Listing -->

	<div class="container">
		<div class="row meetings">
			<div class="col-lg-4">
				<div class="meetings_title">
					<h3>@lang('Salle de fêtes Chery CABOMA')</h3>
					<p>@lang('Trouvez à la résidence CABOMA une salle de fêtes cosy, bien équipée et espacée pour vos') <mark>@lang('manifestations')</mark> @lang('(anniversaires, mariages, rencontres etc...).')</p>
					<div class="hotel_map_link_container">
						<a class="hotel_map_link" href="#maps">@lang('Localiser les lieux sur Maps')</a>
					</div>
					<div class="button book_button trans_200 mt-4 reserveLocal"><a href="#">@lang('réserver')<span></span><span></span><span></span></a></div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="owl-carousel owl-theme meetings_slider">
				    <div class="item meetings_item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/chery3.jpg') }}" alt="jbriscoe">
				    </div>
				    <div class="item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/chery2.jpg') }}" alt="jbriscoe">
				    </div>
				    <div class="item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/chery.jpg') }}" alt="jbriscoe">
				    </div>
				</div>
			</div>
		</div>

		<div class="flex-lg-row-reverse row meetings">
			<div class="col-lg-4">
				<div class="meetings_title">
					<h3>@lang('Salle de conférences CABOMA')</h3>
					<p>@lang('La résidence CABOMA vous propose également une') <mark>@lang('salle de conférences')</mark>. @lang('Elle est bien espacée et bien aérée.')</p>
					<div class="hotel_map_link_container">
						<a class="hotel_map_link" href="#maps">@lang('Localiser les lieux sur Maps')</a>
					</div>
					<div class="button book_button trans_200 mt-4 reserveLocal"><a href="#">@lang('réserver')<span></span><span></span><span></span></a></div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="owl-carousel owl-theme meetings_slider">
				    <div class="item meetings_item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/conf-2.jpg') }}" alt="jbriscoe">
				    </div>
				    <div class="item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/conf-2.jpg') }}" alt="jbriscoe">
				    </div>
				    <div class="item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/conf-2.jpg') }}" alt="jbriscoe">
				    </div>
				</div>
			</div>
		</div>

		<div class="row meetings">
			<div class="col-lg-4">
				<div class="meetings_title">
					<h3>RoofTop PK10</h3>
					<p>@lang("A l'hôtel PK10, nous disposons d'un") <mark>@lang("toit terrase")</mark> @lang("pour tout événement (mariage, conférence, anniversaire etc...).")</p>
					<div class="hotel_map_link_container">
						<a class="hotel_map_link" href="#maps">@lang('Localiser les lieux sur Maps')</a>
					</div>
					<div class="button book_button trans_200 mt-4 reserveLocal"><a href="#">@lang('réserver')<span></span><span></span><span></span></a></div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="owl-carousel owl-theme meetings_slider">
				    <div class="item meetings_item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/conf-2.jpg') }}" alt="jbriscoe">
				    </div>
				    <div class="item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/conf-2.jpg') }}" alt="jbriscoe">
				    </div>
				    <div class="item">
				    	<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/conf-2.jpg') }}" alt="jbriscoe">
				    </div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">

				<!-- Location on Map -->

				<div class="location_on_map" id="maps">
					<div class="location_on_map_title">@lang('Situations géographiques sur Google Maps')</div>
					@include('includes.maps')
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
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/elements_custom.js') }}"></script>
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>

	<script>
        feather.replace()
    </script>

    <script>
    	$('.meetings_slider').owlCarousel({
		    items:1,
			loop:true,
			autoplay:false,
			smartSpeed:1200,
			// dotsContainer:'main_slider_custom_dots'
		})
    </script>

@endsection