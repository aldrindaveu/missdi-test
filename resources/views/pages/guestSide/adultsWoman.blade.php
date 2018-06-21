@extends('pages.guestSide.viewTalent')

@section('title', 'Adults - Women')
@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection


@section('viewAll','/adults-Woman')
@section('viewAvailable','/adults-WomanAvailable')
@section('viewNotAvailable','/adults-WomanNotAvailable')

@section('talentImgSrc','../../../images/adults-women/aw (3).jpg')
@section('name','Div')
@section('address','Manila')
