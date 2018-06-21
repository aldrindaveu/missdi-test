@extends('pages.customerSide.viewTalentTemp')

@section('title', 'Teens - Boys')

@include('partials._customerSideprelims')

@section('mainheader')
  @include('partials._mainheader')
@endsection

@section('navbar')
<!-- Side bar-->
  @include('partials._cNav')
@endsection

@section('viewAll','/viewTeensGents')
@section('viewAvailable','/viewTeensGentsAvailable')
@section('viewNotAvailable','/viewTeensGentsNotAvailable')

@section('talentImgSrc','../../../images/teens-gents/tg (8).jpg')
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