@extends('pages.customerSide.viewTalentTemp')

@section('title', 'Kids - Boys')

@include('partials._customerSideprelims')

@section('mainheader')
  @include('partials._mainheader')
@endsection

@section('navbar')
<!-- Side bar-->
  @include('partials._cNav')
@endsection

@section('viewAll','/viewKidsBoys')
@section('viewAvailable','/viewKidsBoysAvailable')
@section('viewNotAvailable','/viewKidsBoysNotAvailable')

@section('talentImgSrc','../../../images/kids-boys/kg (1).jpg')
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