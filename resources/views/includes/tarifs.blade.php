<div class="tarifs">
	<div class="container">
		<div class="row tarifs_items">
			<div class="col-lg-4">
				<div class="tarif">
					<div class="image">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym2.jpg') }}" alt="">					
					</div>
					<div class="content">
						<div class="title">10 @lang('séances')</div>
						<div class="description">10.000F</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="tarif">
					<div class="image">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym8.jpg') }}" alt="">
					</div>
					<div class="content">
						<div class="title">@lang('Abonnement 1mois')</div>
						<div class="description">15.000F</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="tarif">
					<div class="image">
						<img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/gym6.jpg') }}" alt="">
					</div>
					<div class="content">
						<div class="title">@lang('1 séance / par jour')</div>
						<div class="description">1.500F</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>