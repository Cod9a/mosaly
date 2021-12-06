@extends('layouts.main')

@section('title', Route::currentRouteName() == 'caboma' ? __('Résidence CABOMA') : __('Hôtel PK10'))

@section('description', Route::currentRouteName() == 'caboma' ? __('Résidence CABOMA') : __('Hôtel PK10'))

@section('customStyles')

	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/about_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/about_responsive.css') }}">
	<script src="https://unpkg.com/feather-icons"></script>

@endsection

@section('content')

	@include('includes.pageHeader')

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			@if(Route::currentRouteName() == 'caboma')
				<div class="rooms rooms1">
					<div class="row flex-lg-row-reverse">
						<div class="col-lg-5">
							<div class="intro_content">
								<div class="intro_title">@lang('caboma résidence')</div>
								<p class="intro_text text-justify">
									@lang('Nous mettons à la disposition de nos clients des appartements modernes, au style contemporain et cosy. Chaque appartement est entièrement meublé et équipé pour vous garantir un séjour de rêve, que vous y soyez dans un but professionnel, en famille ou tout autre occasion.')
								</p>
								<div class="button intro_button"><div class="button_bcg"></div><a href="https://direct-book.com/properties/residencemosalydirect" target="_blank">@lang('réserver')<span></span><span></span><span></span></a></div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="intro_image">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-1.jpg') }}" alt="">
								<div class="offer_name2"><span id="name">Red Luxar</span><span id="price">51.000F</span></div>
							</div>
							<div class="othersRooms">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-1.jpg') }}" class="img-thumbnail active" alt="" data-name="Red Luxar" data-price="51.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-2.jpg') }}" class="img-thumbnail" alt="" data-name="Green Book" data-price="51.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-3.jpg') }}" class="img-thumbnail" alt="" data-name="Violetta Book" data-price="51.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-4.jpg') }}" class="img-thumbnail" alt="" data-name="Woodor Book" data-price="51.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/caboma-5.jpg') }}" class="img-thumbnail" alt="" data-name="Sweety Book" data-price="51.000F">
							</div>
						</div>
					</div>
				</div>
			@endif

			@if(Route::currentRouteName() == 'pk10')
				<div class="rooms rooms2">
					<div class="row">
						<div class="col-lg-5">
							<div class="intro_content">
								<div class="intro_title">@lang('pk10 hôtel')</div>
								<p class="intro_text text-justify">
									@lang('Nous mettons à la disposition de nos clients des appartements modernes, au style contemporain et cosy. Chaque appartement est entièrement meublé et équipé pour vous garantir un séjour de rêve, que vous y soyez dans un but professionnel, en famille ou tout autre occasion.')
								</p>
								<div class="button intro_button"><div class="button_bcg"></div><a href="https://direct-book.com/properties/hotelmosalydirect" target="_blank">@lang('réserver')<span></span><span></span><span></span></a></div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="intro_image">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-1.jpg') }}" alt="">
								<div class="offer_name2"><span id="name">PK10 suite</span><span id="price">25.000F</span></div>
							</div>
							<div class="othersRooms">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-1.jpg') }}" class="img-thumbnail active" alt="" data-name="PK10 suite" data-price="25.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-2.jpeg') }}" class="img-thumbnail" alt="" data-name="PK10 suite" data-price="20.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-3.jpeg') }}" class="img-thumbnail" alt="" data-name="PK10 suite" data-price="20.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-4.jpeg') }}" class="img-thumbnail" alt="" data-name="PK10 suite" data-price="20.000F">
								<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/pk10-5.jpeg') }}" class="img-thumbnail" alt="" data-name="PK10 suite" data-price="20.000F">
							</div>
						</div>
					</div>
				</div>
			@endif
		</div>

		@if(Route::currentRouteName() == 'pk10')
			@include('includes.offers2')
		@else
			@include('includes.offers1')
		@endif	

		@include('includes.features')
		
	</div>

@endsection

@section('customScripts')
	
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/parallax-js-master/parallax.min.js') }}"></script>
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/about_custom.js') }}"></script>
	<script>
        var thumbnails1 = document.querySelectorAll('.rooms1 .img-thumbnail');
        var main = document.querySelector('.rooms1 .intro_image img');
        var name1 = document.querySelector('.rooms1 .intro_image .offer_name2 #name');
        var price = document.querySelector('.rooms1 .intro_image .offer_name2 #price');

        var thumbnails2 = document.querySelectorAll('.rooms2 .img-thumbnail');
        var main2 = document.querySelector('.rooms2 .intro_image img');
        var name2 = document.querySelector('.rooms2 .intro_image .offer_name2 #name');
        var price2 = document.querySelector('.rooms2 .intro_image .offer_name2 #price');
        
        Array.from(thumbnails1).forEach((element) => {
            element.addEventListener('click', function() {
                var current = document.querySelector('.rooms1 .img-thumbnail.active');
                main.src = this.src;
                name1.textContent = this.getAttribute('data-name')
                price.textContent = this.getAttribute('data-price')
                current.classList.remove('active');
                this.classList.add('active');
            })
        })

        Array.from(thumbnails2).forEach((element) => {
            element.addEventListener('click', function() {
                var current2 = document.querySelector('.rooms2 .img-thumbnail.active');
                main2.src = this.src;
                name2.textContent = this.getAttribute('data-name')
                price2.textContent = this.getAttribute('data-price')
                current2.classList.remove('active');
                this.classList.add('active');
            })
        })
    </script>

    <script>
        feather.replace()
    </script>

@endsection