@extends('errors::minimal')

@section('title', __('Page non disponible'))
@section('code', '404')
@section('message', __('Page non disponible'))
@section('choice')
	<a href="{{ route('index') }}" style="text-transform: none; margin-top: 1em; border-bottom: 2px solid #ccc; display: inline-block;">@lang("Retourner à l'accueil")</a>
@endsection
