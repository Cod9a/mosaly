<!-- Header -->

<header class="header">

	<!-- Top Bar -->

	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row">
					<div class="phone">(+229) 21 31 76 30</div>
					<div class="social">
						<ul class="social_list">
							<li class="social_list_item"><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li class="social_list_item"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
							<li class="social_list_item"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="user_box ml-auto d-flex">
						<div class="user_box_login user_box_link d-flex align-items-center">
							<a href="{{ route('setLocal', 'fr') }}" class="{{ \App::isLocale('fr') ? 'active' : '' }}"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/flags/fr.png') }}" width="12" height="10"> fr</a>
						</div>
						<div class="user_box_register user_box_link d-flex align-items-center">
							<a href="{{ route('setLocal', 'en') }}" class="{{ \App::isLocale('en') ? 'active' : '' }}"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/flags/en.png') }}" width="12" height="10"> en</a>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Main Navigation -->

	<nav class="main_nav">
		<div class="container">
			<div class="row">
				<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
					<div class="logo_container">
						<div class="logo"><a href="{{ route('index') }}"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo_blanc.png') }}" alt="Logo Mosaly"></a></div>
					</div>
					<div class="main_nav_container ml-auto">
						<ul class="main_nav_list">
							<li class="main_nav_item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}"><a href="{{ route('index') }}">@lang('accueil')</a></li>
							<li class="main_nav_item {{ Route::currentRouteName() == 'caboma' ? 'active' : '' }}"><a href="{{ route('caboma') }}">@lang('résidence') <br> <span>caboma</span></a></li>
							<li class="main_nav_item {{ Route::currentRouteName() == 'pk10' || Route::currentRouteName() == 'room' ? 'active' : '' }}"><a href="{{ route('pk10') }}">@lang('hôtel') <span>pk10</span></a></li>
							<li class="main_nav_item {{ Route::currentRouteName() == 'conferences' ? 'active' : '' }}"><a href="{{ route('conferences') }}">meetings & events</a></li>
							<li class="main_nav_item {{ Route::currentRouteName() == 'gymFitness' ? 'active' : '' }}"><a href="{{ route('gymFitness') }}">@lang('fitness et gym')</a></li>
							<li class="main_nav_item {{ Route::currentRouteName() == 'contacts' ? 'active' : '' }}"><a href="{{ route('contacts') }}">@lang('contacts')</a></li>
						</ul>
					</div>
					<div class="content_search ml-lg-0 ml-auto">
						<a class="reserveLink reserved" href="#">@lang('RESERVER')</a>
					</div>

					<div class="hamburger">
						<i class="fa fa-bars trans_200"></i>
					</div>
				</div>
			</div>
		</div>	
	</nav>

</header>

@if ($message = Session::get('success'))
    <script>
        toastr.options.timeOut = 6000;
        toastr.success("{{ $message }}");
    </script>
@endif