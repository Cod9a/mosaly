<!-- Home -->

<div class="home">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/' . ((Route::currentRouteName() == 'apparts' ? 'headerBack4.jpeg' : (Route::currentRouteName() == 'conferences' ? 'headerBack5.jpeg' : (Route::currentRouteName() == 'gymFitness' ? 'headerBack8.jpeg' : 'headerBack3.jpeg'))))) }}"></div>
	<div class="home_content">
		<div class="home_title">
			@if(isset($room))
				{{ getRoomDetails($room)[0] }}
			@else
				@yield('title')
			@endif
		</div>
	</div>
</div>