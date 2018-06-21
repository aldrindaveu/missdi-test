@section('css')
@if(null !==(auth('web')->user()))
	@if (auth()->user()->accountType != '2')
		<script> window.location="/error403";</script>
	@endif
@else
	<script> window.location="/";</script>
@endif	
  <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
@endsection
@section('bodyClass', 'hold-transition skin-black sidebar-mini')
@section('divClass', 'wrapper')

@section('mainheader')
  @include('partials._mainheader')
@endsection

@section('navbar')
<!-- Side bar-->
  @include('partials._cNav')
@endsection