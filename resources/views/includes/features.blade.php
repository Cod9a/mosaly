<!-- Features -->
<div id="features">
	<div class="container">
		<div class="features">
			@if(Route::currentRouteName() != "conferences")
		        <div class="feature">
		            <div><i data-feather="star"></i></div>
		            <p class="title">@lang('Des appartements confortables')</p>
		            <p class="description">@lang("Nous disposons de suites et d'appartements de haut standing")</p>
		        </div>

		        <div class="feature">
		            <div><i data-feather="phone-call"></i></div>
		            <p class="title">@lang('Contactez-nous')</p>
		            <p class="description"><a href="tel:+22962691850">+229 66666666</a> / <a href="tel:+22962691850">+229 67676767</a></p>
		        </div>

		        <div class="feature">
		            <div><i data-feather="bell"></i></div>
		            <p class="title">@lang('Disponibilité')</p>
		            <p class="description">@lang('Nous sommes disponibles 24h/7')</p>
		        </div>
		    @else
		    	<div class="feature">
		            <div><i data-feather="thumbs-up"></i></div>
		            <p class="title">@lang('Salle Chery')</p>
		            <p class="description">@lang('La salle choisie sera aménagé et décorée aux couleurs, thèmes et styles adaptés à votre événement')</p>
		        </div>

		        <div class="feature">
		            <div><i data-feather="home"></i></div>
		            <p class="title">@lang('PK10 Tour')</p>
		            <p class="description">@lang('Avec vue sur la mer, des hôtesses seront mises à votre disposition pour accueillir, orienter, conseiller et servir vos convives')</p>
		        </div>

		        <div class="feature">
		            <div><i data-feather="star"></i></div>
		            <p class="title">@lang('Espace confortable')</p>
		            <p class="description">@lang('Le Complexe Hôtel MOSALY, ce sont des salles de fêtes de haut standing, avec climatisation')</p>
		        </div>
		    @endif
	    </div>
    </div>
</div>