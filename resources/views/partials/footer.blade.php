<!-- Footer -->

<footer class="footer">
	<div class="container">
		<div class="row">

			<!-- Footer Column -->
			<div class="col-lg-3 footer_column">
				<div class="footer_col">
					<div class="footer_content footer_about">
						<div class="logo_container footer_logo">
							<div class="logo"><a href="#">mosaly</a></div>
						</div>
						<p class="footer_about_text">@lang('Appartements + Salle de fêtes + Salle de conférence + Gym')</p>
						<ul class="footer_social_list">
							<li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Column -->
			<div class="col-lg-3 footer_column">
				<div class="footer_col">
					<div class="footer_title">@lang('liens utiles')</div>
					<div class="footer_content footer_tags">
						<ul class="tags_list clearfix">
							<li class="tag_item"><a href="{{ route('index') }}">@lang('accueil')</a></li>
							<li class="tag_item"><a href="{{ route('caboma') }}">@lang('résidence caboma')</a></li>
							<li class="tag_item"><a href="{{ route('pk10') }}">@lang('hôtel pk10')</a></li>
							<li class="tag_item"><a href="{{ route('conferences') }}">@lang('conférences')</a></li>
							<li class="tag_item"><a href="{{ route('conferences') }}">@lang('fêtes')</a></li>
							<li class="tag_item"><a href="{{ route('contacts') }}">@lang('contacts')</a></li>
							<li class="tag_item"><a href="{{ route('index') }}/#gallery">@lang('galerie')</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Footer Column -->
			<div class="col-lg-3 footer_column">
				<div class="footer_col">
					<div class="footer_title">@lang('contact info')</div>
					<div class="footer_content footer_contact">
						<ul class="contact_info_list">
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/placeholder.svg') }}" alt=""></div></div>
								<div class="contact_info_text">@lang('Jonquet, rue de la HAAC, en face de l’agence MTN Jonquet') </div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/phone-call.svg') }}" alt=""></div></div>
								<div class="contact_info_text">(+229) 21 31 76 30</div>
							</li>
							<li class="contact_info_item d-flex flex-row">
								<div><div class="contact_info_icon"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/message.svg') }}" alt=""></div></div>
								<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contact@mosaly.fr</a></div>
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
</footer>