<div class="trending">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="section_title">@lang('galerie')</h2>
			</div>
		</div>
		<div class="row trending_container">

			<!-- Gallery -->
         <div class="portfolio-menu mt-2 mb-4">
            <ul>
               <li class="btn btn-outline-dark active" data-filter="*">@lang('Tout')</li>
               <li class="btn btn-outline-dark" data-filter=".residence">@lang('Résidence')</li>
               <li class="btn btn-outline-dark" data-filter=".hotel">@lang('Hôtel')</li>
               <li class="btn btn-outline-dark" data-filter=".conference">@lang('Conférences et fêtes')</li>
               <li class="btn btn-outline-dark" data-filter=".fitness">@lang('Fitness et gym')</li>
            </ul>
         </div>
         <div class="portfolio-item row">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence.jpg') }}" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/conference1.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/conference1.jpg') }}" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence2.jpg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence2.jpg') }}" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/residence.jpg') }}" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/conference1.jpg') }}" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/mosaly/hotel.jpeg') }}" alt="">
               </a>
            </div>
         </div>

		</div>
	</div>
</div>