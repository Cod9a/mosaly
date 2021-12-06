<div class="menu trans_500">
	<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
		<div class="user_box ml-auto d-flex">
			<div class="user_box_login user_box_link d-flex align-items-center">
				<a href="{{ route('setLocal', 'fr') }}" class="{{ \App::isLocale('fr') ? 'active' : '' }}"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/flags/fr.png') }}" width="12" height="10"> fr</a>
			</div>
			<div class="user_box_register user_box_link d-flex align-items-center">
				<a href="{{ route('setLocal', 'en') }}" class="{{ \App::isLocale('en') ? 'active' : '' }}"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/flags/en.png') }}" width="12" height="10"> en</a>
			</div>
		</div>
		<div class="menu_close_container"><div class="menu_close"></div></div>
		<!-- <div class="logo menu_logo"><a href="#"><img src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo_blanc.png') }}" alt=""></a></div> -->
		<ul>
			<li class="menu_item"><a href="{{ route('index') }}">@lang('accueil')</a></li>
			<li class="menu_item"><a href="{{ route('caboma') }}">@lang('résidence') caboma</a></li>
			<li class="menu_item"><a href="{{ route('pk10') }}">@lang('hôtel') pk10</a></li>
			<li class="menu_item"><a href="{{ route('conferences') }}">@lang('conférences et fêtes')</a></li>
			<li class="menu_item"><a href="{{ route('conferences') }}">@lang('fitness et gym')</a></li>
			<li class="menu_item"><a href="{{ route('contacts') }}">@lang('contacts')</a></li>
		</ul>
	</div>
</div>