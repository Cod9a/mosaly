@include('partials.start')

<body>
	<div class="super_container">

		@include('partials.header')

		@include('partials.menu')

		@yield('content')

		@include('partials.footer')

		@include('includes.copyright')

	</div>

	@include('partials.end')

</body>

</html>