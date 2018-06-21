@extends('pages.guestSide.talentPage')

@section('title', 'Adults')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection

@section('navbar')
	@include('partials._navbarGuestDark')
@endsection

@section('female', 'woman')
@section('femaleHref', '/adults-Woman')
@section('femaleLink', 'WOMEN')
@section('male', 'man')
@section('maleHref', '/adults-Man')
@section('maleLink', 'MEN')

