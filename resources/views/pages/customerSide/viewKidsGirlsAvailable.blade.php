@extends('pages.customerSide.viewTalentTemp')

@section('title', 'Kids - Girls')

@include('partials._customerSideprelims')

@section('mainheader')
  @include('partials._mainheader')
@endsection

@section('navbar')
<!-- Side bar-->
  @include('partials._cNav')
@endsection

@section('viewAll','/viewKidsGirls')
@section('viewAvailable','/viewKidsGirlsAvailable')
@section('viewNotAvailable','/viewKidsGirlsNotAvailable')

@section('talentImgSrc','../../../images/kids-girls/kg (2).jpg')
@section('name','Div')

@section('footer')
	<center>
	 	<footer class="main-footer">
		    Copyright &copy; 2018 <strong>MissDi Model & Talent Managment</a>.</strong> All rights
		    reserved.
		</footer>
	</center>
@endsection

@section('js')
@include('partials._script3')
@include('partials._scripts4')
@endsection