<!-- CTA -->

<div class="cta">
	<!-- Image by https://unsplash.com/@thanni -->
	{{-- -image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/cta.jpg)') --}}
	<div class="cta_background" style="background"></div>
	
	<div class="container">
		<div class="row">
			<div class="col">

				<!-- CTA Slider -->

				<div class="cta_slider_container">
					<div class="owl-carousel owl-theme cta_slider">

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence2.jpg)') }}">
							<div class="cta_title">@lang('Suites et Chambres climatisées')</div>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#" class="reserved">@lang('réservez maintenant')<span></span><span></span><span></span></a></div>
						</div>

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/fetes1.jpg)') }}">
							<div class="cta_title">@lang('Salles des fêtes avec vue sur la mer')</div>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#" class="reserved">@lang('réservez maintenant')<span></span><span></span><span></span></a></div>
						</div>

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/backs/1.jpg)') }}">
							<div class="cta_title">@lang('Appartements aux styles contemporains et cosy')</div>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#" class="reserved">@lang('réservez maintenant')<span></span><span></span><span></span></a></div>
						</div>

						<!-- CTA Slider Item -->
						<div class="owl-item cta_item text-center" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/navette.jpeg)') }}">
							<div class="cta_title">@lang('Navette aéroport')</div>
							<div class="button cta_button"><div class="button_bcg"></div><a href="#" class="reserved">@lang('réservez maintenant')<span></span><span></span><span></span></a></div>
						</div>
						
					</div>

					<!-- CTA Slider Nav - Prev -->
					<div class="cta_slider_nav cta_slider_prev">
						<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='cta_grad_prev'>
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
					
					<!-- CTA Slider Nav - Next -->
					<div class="cta_slider_nav cta_slider_next">
						<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
							<defs>
								<linearGradient id='cta_grad_next'>
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
	</div>
				
</div>