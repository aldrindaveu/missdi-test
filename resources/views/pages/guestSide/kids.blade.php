@extends('pages.guestSide.talentPage')

@section('title', 'Kids')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection

@section('female', 'girls')
@section('femaleHref', '/kids-girls')
@section('femaleLink', 'GIRLS')
@section('male', 'boys')
@section('maleHref', '/kids-boys')
@section('maleLink', 'BOYS')
