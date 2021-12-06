<!-- Testimonials -->

<div class="testimonials">
	<div class="test_border"></div>
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">@lang('nos sites')</h2>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="test_slider_container">
					<div class="owl-carousel owl-theme test_slider">
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/contact.jpg') }}" alt="@anniegray"></div>
								<div class="test_icon"><i class="fas fa-building fa-2x"></i></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">@lang('résidence caboma')</div>
											<!-- <a class="test_date reserved" href="#">@lang('RESERVER')</a> -->
										</div>
										<!-- <div class="test_quote_title">" Best holliday ever "</div> -->
										<p class="test_quote_text text-justify">@lang('A 10 minutes en voiture de l’aéroport Cardinal Bernadin Gantin de Cotonou, retrouvez la Résidence MOSALY sise à Jonquet, rue de la Haute Autorité de l’Audiovisuel et de la Communication (HAAC), en face de l’agence MTN Jonquet.')<br>
										@lang('Contacts') : 00229 21 31 12 17 / 00229 61 47 30 30</p>
									</div>
								</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_item">
								<div class="test_image"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/fetes1.jpg') }}" alt="@seefromthesky"></div>
								<div class="test_icon"><i class="fa fa-hotel fa-2x"></i></div>
								<div class="test_content_container">
									<div class="test_content">
										<div class="test_item_info">
											<div class="test_name">@lang('hôtel pk10')</div>
											<!-- <a class="test_date reserved" href="#">@lang('RESERVER')</a> -->
										</div>
										<!-- <div class="test_quote_title">" Best holliday ever "</div> -->
										<p class="test_quote_text text-justify">@lang('Design esquis qui vous proccureront un confort sans égale avec un service personnalié. Situé à PK10, voie pavée HOUDEGBE, 3ème rue à gauche (rue du caniveau), 4ème rue à droite.') <br> @lang('Contact') : 00229 66 00 26 28</p>
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