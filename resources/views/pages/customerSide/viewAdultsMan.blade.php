@extends('pages.customerSide.viewTalentTemp')

@section('title', 'Adults - Woman')

@include('partials._customerSideprelims')

@section('mainheader')
  @include('partials._mainheader')
@endsection

@section('navbar')
<!-- Side bar-->
  @include('partials._cNav')
@endsection

@section('viewAll','/viewAdultsMan')
@section('viewAvailable','/viewAdultsManAvailable')
@section('viewNotAvailable','/viewAdultsManNotAvailable')

@section('talentImgSrc','../../../images/adults-men/am (8).jpg')
@section('name','Guesh')

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