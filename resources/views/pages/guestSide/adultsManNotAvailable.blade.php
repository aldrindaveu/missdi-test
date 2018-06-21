@extends('pages.guestSide.viewTalent')

@section('title', 'Adults - Men')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection


@section('viewAll','/adults-Man')
@section('viewAvailable','/adults-ManAvailable')
@section('viewNotAvailable','/adults-ManNotAvailable')

@section('talentImgSrc','../../../images/adults-men/am (9).jpg')
@section('name','Div')

@section('address','Manila')