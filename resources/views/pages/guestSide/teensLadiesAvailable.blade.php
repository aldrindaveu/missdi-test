@extends('pages.guestSide.viewTalent')

@section('title', 'Teens - Ladies')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection


@section('viewAll','/teens-ladies')
@section('viewAvailable','/teens-ladiesAvailable')
@section('viewNotAvailable','/teens-ladiesNotAvailable')

@section('talentImgSrc','../../../images/teens-ladies/tl (3).jpg')
@section('name','Div')
@section('address','Manila')