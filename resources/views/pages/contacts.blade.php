@extends('layouts.main')

@section('title', __('Contactez-nous'))

@section('description', 'Contactez Mosaly n\'importe quand')

@section('customStyles')

	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/contact_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/contact_responsive.css') }}">
	<script src="https://unpkg.com/feather-icons"></script>

@endsection

@section('content')

	@include('includes.pageHeader')

	<!-- Contact -->

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">@lang('contactez-nous')</div>
						<form action="{{ route('sendContact') }}" method="POST" id="contact_form" class="contact_form text-center">
							@csrf
							<input name="name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="@lang('Nom & Prénom(s)')" required="required">
							<input name="email" type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="@lang('Adresse email')" required="required">
							<input name="subject" type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="@lang('Sujet')" required="required">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="@lang('Message')" required="required"></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">@lang('envoyer le message')<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- About -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					
					<!-- About - Image -->

					<div class="about_image">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/man2.png') }}" alt="">
					</div>

				</div>

				<div class="col-lg-4">
					
					<!-- About - Content -->

					<div class="about_content">
						<div class="logo_container about_logo">
							<div class="logo"><a href="#">mosaly</a></div>
						</div>
						<p class="about_text">@lang('Appartements + Salle de fêtes + Salle de conférence + Gym')</p>
						<ul class="about_social_list">
							<li class="about_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="about_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>

				</div>

				<div class="col-lg-3">
					
					<!-- About Info -->

					<div class="about_info">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/placeholder.svg') }}" alt=""></div></div>
								<div class="contact_info_text">@lang('Jonquet, rue de la HAAC, en face de l’agence MTN Jonquet')</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/phone-call.svg') }}" alt=""></div></div>
								<div class="contact_info_text">(+229) 21 31 76 30</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/message.svg') }}" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contact@mosaly.fr" target="_top">contact@mosaly.fr</a></div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/planet-earth.svg') }}" alt=""></div></div>
								<div class="contact_info_text"><a href="/">www.mosaly.fr</a></div>
							</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>

	@include('includes.maps')

@endsection

@section('customScripts')

	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/plugins/parallax-js-master/parallax.min.js') }}"></script>
	<script src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/js/contact_custom.js') }}"></script>

@endsection