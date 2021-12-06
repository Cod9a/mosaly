<div class="trending" id="gallery">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">@lang('galerie')</h2>
			</div>
		</div>
		<div class="row trending_container container2">
			<ul class="gallery">
	            <li class="filter active" data-filter="all">@lang('Tout')</li>
	            <li class="filter" data-filter="residence">@lang('Résidence')</li>
	            <li class="filter" data-filter="hotel">@lang('Hôtel')</li>
	            <li class="filter" data-filter="conference">@lang('Conférences et fêtes')</li>
	            <li class="filter" data-filter="fitness">@lang('Fitness et gym')</li>
	        </ul>

	        <div class="product">
	            <div class="itembox fitness">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym7.jpg') }}" data-item="fitness" alt="">
	            </div>
	            <div class="itembox residence">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence3.jpg') }}" data-item="hotel" alt="">
	            </div>
	            <div class="itembox conference">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/fetes1.jpg') }}" data-item="conference" alt="">
	            </div>
	            <div class="itembox fitness">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym8.jpg') }}" data-item="residence" alt="">
	            </div>
	            <div class="itembox residence">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/contact.jpg') }}" data-item="hotel" alt="">
	            </div>
	            <div class="itembox hotel">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/slide_16.jpg') }}" data-item="conference" alt="">
	            </div>
	            <div class="itembox fitness">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym9.jpg') }}" data-item="hotel" alt="">
	            </div>
	            <div class="itembox conference">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/haut-pk10.jpg') }}" data-item="residence" alt="">
	            </div>
	            <div class="itembox hotel">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/voiture-prado.jpg') }}" data-item="residence" alt="">
	            </div>
	            <div class="itembox gym">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym1.jpg') }}" data-item="residence" alt="">
	            </div>
	            <div class="itembox hotel">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel5.jpg') }}" data-item="residence" alt="">
	            </div>
	            <div class="itembox gym">
	                <img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym2.jpg') }}" data-item="residence" alt="">
	            </div>
	        </div>
		</div>
	</div>
</div>
