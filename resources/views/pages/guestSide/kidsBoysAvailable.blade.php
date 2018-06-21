@extends('pages.guestSide.viewTalent')

@section('title', 'Kids - Boys')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection


@section('viewAll','/kids-boys')
@section('viewAvailable','/kids-boysAvailable')
@section('viewNotAvailable','/kids-boysNotAvailable')

@section('talentImgSrc','../../../images/kids-boys/kg (10).jpg')
@section('name','Div')

@section('address','Manila')