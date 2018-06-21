@extends('pages.guestSide.viewTalent')

@section('title', 'Teens - Gents')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection


@section('viewAll','/teens-gents')
@section('viewAvailable','/teens-gentsAvailable')
@section('viewNotAvailable','/teens-gentsNotAvailable')

@section('talentImgSrc','../../../images/teens-gents/tg (8).jpg')
@section('name','Div')
@section('address','Manila')