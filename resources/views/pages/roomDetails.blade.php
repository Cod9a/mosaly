@extends('layouts.main')

@section('title', getRoomDetails($room)[0])

@section('description', getRoomDetails($room)[0])

@section('customStyles')

	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/about_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/about_responsive.css') }}">
	<script src="https://unpkg.com/feather-icons"></script>

@endsection

@section('content')

	@include('includes.pageHeader')

	<div class="intro">
		<div class="container">
			<div class="rooms">
				<div class="row">
					<div class="col-lg-7">
						<div class="intro_image">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/' . getRoomDetails($room)[2]) }}" alt="">
							<div class="offer_name2"><span id="name">{{ getRoomDetails($room)[0] }}</span></div>
						</div>
						<div class="othersRooms">
							<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/' . getRoomDetails($room)[2]) }}" class="img-thumbnail active" alt="">
							@if($room == 'caboma1' || $room == 'caboma2' || $room == 'caboma3')
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-2.jpg') }}" class="img-thumbnail" alt="">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-3.jpg') }}" class="img-thumbnail" alt="">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-4.jpg') }}" class="img-thumbnail" alt="">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-5.jpg') }}" class="img-thumbnail" alt="">
							@else
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-2.jpeg') }}" class="img-thumbnail" alt="">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-3.jpeg') }}" class="img-thumbnail" alt="">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-4.jpeg') }}" class="img-thumbnail" alt="">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-5.jpeg') }}" class="img-thumbnail" alt="">
							@endif
						</div>
					</div>
					<div class="col-lg-5">
						<div class="offers_content">
							<div class="offers_price">{{ getRoomDetails($room)[1] }}<span>@lang('par nuitée')</span></div>
							<p class="offers_text">@lang('Toutes les chambres comprennent la climatisation, une armoire, un bureau, une télévision à écran plat et une salle de bains')</p>
							<div class="details_link_container">
								<a class="details_link" href="#characteristics">@lang('Services et fonctionnalités')</a>
							</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#" class=" reserved">@lang('réserver')<span></span><span></span><span></span></a></div>
						</div>
					</div>

					<div class="col-lg-12 pb-4">
						<div class="details" id="characteristics">
							<div class="details_title">@lang('Services et fonctionnalités')</div>
							<div class="details_content">
								<div class="row">
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fas fa-campground fa-3x"></i></i></div>
											<div class="detail_content">@lang('Front de mer') &#8211; @lang('Terrase bien exposé')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fa fa-paw fa-3x"></i></div>
											<div class="detail_content">@lang('Les animaux de compagnie ne sont pas admis au sein de l’établissement')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fas fa-utensils fa-3x"></i></i></div>
											<div class="detail_content">@lang('Fruits') &#8211; @lang('Bouteille d’eau') &#8211; @lang('Vin/champagne') &#8211; @lang('Menus pour régimes spéciaux (sur demande)') &#8211; @lang('Snack-bar') &#8211; @lang('Petit-déjeuner en chambre')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fas fa-wifi fa-3x"></i></div>
											<div class="detail_content">@lang('Une connexion Wi-Fi est disponible dans les parties communes gratuitement')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fas fa-parking fa-3x"></i></div>
											<div class="detail_content">@lang('Un parking gratuit et privé est disponible sur place (sans réservation préalable)')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fa fa-dolly fa-3x"></i></div>
											<div class="detail_content">@lang('Navette de l’établissement à l’aéroport') &#8211; @lang('Navette de l’aéroport à l’établissement')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fa fa-concierge-bell fa-3x"></i></div>
											<div class="detail_content">@lang('Enregistrement/départ privé') &#8211; @lang('Service de concierge') &#8211; @lang('Enregistrement/règlement rapide') &#8211; @lang('Réception ouverte 24h/24')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fa fa-user-shield fa-3x"></i></div>
											<div class="detail_content">@lang('Extincteurs') &#8211; @lang('Caméras de surveillance à l’extérieur de l’établissement') &#8211; @lang('Caméras de surveillance dans les parties communes') &#8211; @lang('Sécurité 24h/24')</div>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">
										<div class="detail">
											<div class="detail_icon"><i class="fa fa-running fa-3x"></i></div>
											<div class="detail_content">@lang('Vestiaires salle de sport/SPA') &#8211; @lang('Coach sportif personnel') &#8211; @lang('Cours de fitness') &#8211; @lang('Fitness') &#8211; @lang('Centre de remise en forme')</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="">
					<div class="details_title">@lang('Autres chambres')</div>
						<div class="details_content row">
							<!-- Offers Item -->
							<div class="col-lg-6 offers_col">
								<div class="offers_item">
									<div class="row">
										<div class="col-lg-6">
											<div class="offers_image_container" style="height: 250px">
												<div class="offers_image_background" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/1.jpg)') }}"></div>
													<div class="offer_name"><a href="{{ route('room', 'chambre-suite') }}">@lang('suite')</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('customScripts')

	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/parallax-js-master/parallax.min.js') }}"></script>
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/about_custom.js') }}"></script>
	<script>
        var thumbnails = document.querySelectorAll('.img-thumbnail');
        var main = document.querySelector('.intro_image img');
        
        Array.from(thumbnails).forEach((element) => {
            element.addEventListener('click', function() {
                var current = document.querySelector('.img-thumbnail.active');
                main.src = this.src;
                current.classList.remove('active');
                this.classList.add('active');
            })
        })
    </script>

    <script>
        feather.replace()
    </script>

@endsection