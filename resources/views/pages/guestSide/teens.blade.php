@extends('pages.guestSide.talentPage')

@section('title', 'Teens')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection

@section('navbar')
	@include('partials._navbarGuestDark')
@endsection

@section('female', 'ladies')
@section('femaleHref', '/teens-ladies')
@section('femaleLink', 'LADIES')
@section('male', 'gents')
@section('maleHref', '/teens-gents')
@section('maleLink', 'GENTS')

