@extends('layouts.main')

@section('title', __('Accueil'))

@section('description', 'Complexe Mosaly Accueil')

@section('customStyles')

	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/main_styles.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/styles/gallery.css') }}">
	
@endsection

@section('content')

	@include('includes.home')

	@include('includes.offers')

	@include('includes.testimonials')

	@include('includes.search')

	{{-- @include('includes.intro') --}}

	@include('includes.cta')

	@include('includes.gallery')

	@include('includes.contact')

@endsection

@section('customScripts')
	<script type="text/javascript">		
		//selecting ul
		const gallery = document.querySelector(".gallery");

		//select imagbox
		const itemboxes = document.querySelectorAll(".itembox")

		gallery.addEventListener("click", (e)=>{
		    console.log(e)
		    if(e.target.classList.contains("filter")){
		        //
		        gallery.querySelector(".active").classList.remove("active");

		        e.target.classList.add("active");

		        const filterValue = e.target.getAttribute("data-filter");

		        itemboxes.forEach(item =>{
		            if(item.classList.contains(filterValue) || filterValue === "all"){
		                item.classList.add("show");

		                item.classList.remove("hide");
		               
		            }
		            else {
		                item.classList.add("hide")
		            }
		        })
		    }
		})
	</script>
@endsection