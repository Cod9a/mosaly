@extends('errors::minimal')

@section('title', __('Erreur sur le serveur !'))
@section('code', '500')
@section('message', __('Erreur sur le serveur. Veuillez contacter les administrateurs !'))
