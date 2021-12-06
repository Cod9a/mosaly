<!-- Offers -->

<div class="offers" style="margin-bottom: -4em !important;">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">
					@lang('Les chambres')
				</h2>
			</div>
		</div>
		<div class="row offers_items">

			<!-- Offers Item -->
			<div class="col-lg-6 offers_col">
				<div class="offers_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offers_image_container">
								<div class="offers_image_background" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/1.jpg)') }}"></div>
								<div class="offer_name"><a href="{{ route('room', 'chambre-standard') }}">@lang('chambre standard')</a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offers_content">
								<div class="offers_price">20 000F<span>@lang('par nuitée')</span></div>
								<p class="offers_text">@lang('Toutes les chambres comprennent la climatisation, une armoire, un bureau, une télévision à écran plat et une salle de bains')</p>
								<div class="offers_icons">
									<ul class="offers_icons_list">
										<li class="offers_icons_item"><i class="fas fa-wifi"></i></li>
										<li class="offers_icons_item"><i class="fas fa-dolly"></i></li>
										<li class="offers_icons_item"><i class="fas fa-utensils"></i></li>
										<li class="offers_icons_item"><i class="fas fa-glass-cheers"></i></li>
									</ul>
								</div>
								<div class="offers_link"><a href="{{ route('room', 'chambre-standard') }}">@lang('en savoir plus')</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Offers Item -->
			<div class="col-lg-6 offers_col">
				<div class="offers_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offers_image_container">
								<!-- Image by Egzon Bytyqi -->
								<div class="offers_image_background" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/rooms/2.jpg)') }}"></div>
								<div class="offer_name"><a href="{{ route('room', 'suite') }}">@lang('suite')</a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offers_content">
								<div class="offers_price">25 000F<span>@lang('par nuitée')</span></div>
								<p class="offers_text">@lang('Toutes les chambres comprennent la climatisation, une armoire, un bureau, une télévision à écran plat et une salle de bains')</p>
								<div class="offers_icons">
									<ul class="offers_icons_list">
										<li class="offers_icons_item"><i class="fas fa-wifi"></i></li>
										<li class="offers_icons_item"><i class="fas fa-dolly"></i></li>
										<li class="offers_icons_item"><i class="fas fa-utensils"></i></li>
										<li class="offers_icons_item"><i class="fas fa-glass-cheers"></i></li>
									</ul>
								</div>
								<div class="offers_link"><a href="{{ route('room', 'suite') }}">@lang('en savoir plus')</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>