@extends('pages.guestSide.viewTalent')

@section('title', 'Kids - Girls')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection


@section('viewAll','/kids-girls')
@section('viewAvailable','/kids-girlsAvailable')
@section('viewNotAvailable','/kids-girlsNotAvailable')

@section('talentImgSrc','../../../images/kids-girls/kg (1).jpg')
@section('name','Div')

@section('address','Manila')