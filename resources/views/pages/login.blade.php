@extends('pages.superUserPage')

@section('title', 'Login')

@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection

@section('bodyConfig')
  style="background-color:black"
@endsection

@section('content')
      <div class="container login-page" style="background-color:black !important">
      
        <div class="login-box">
          <center><br><br><text>Sign in to your account</text></center><br>

            @if(isset(Auth::user()->Username))
              <script>window.location="successLogin"</script>
            @endif

            @if ($message = Session::get('error'))
              <div class="alert alert-danger alert-block alert-dismissible fade show">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif

            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
            @endif

          <form method="post" action="{{ url('authenticate') }}">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="username" placeholder="Enter Username">
            <br><input type="password" class="form-control" name="password" placeholder="Enter Password"><br>
            <label><input type="checkbox" name="remember">Remember Me</label>
            <input type="submit" class="btn btn-black btn-login" name="logInButton" value="LOGIN" /><br><br>
            <a href="#" data-toggle="modal" data-target="#forgotPassModal">Forgot Password</a><br>
            <a href="#" data-toggle="modal" data-target="#registerModal">Register</a><br>
          </form>
        </div>
      
    
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">MissDi Registration</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form>
            <input type="text" class="form-control" name="FullName" placeholder="Enter Full Name:"><br>
        <input type="text" class="form-control" name="Age" placeholder="Enter Age:"><br>
        <input type="text" class="form-control" name="Address" placeholder="Enter Address:"><br>
        <input type="text" class="form-control" name="Email" placeholder="Enter E-mail:"><br>
        <input type="text" class="form-control" name="TelephoneNumber" placeholder="Enter Telephone Number:"><br>
        <input type="text" class="form-control" name="CellphoneNumber" placeholder="Enter Cellphone Number:"><br>
        <input type="text" class="form-control" name="username" placeholder="Enter Username:"><br>
        <input type="password" class="form-control" name="password" placeholder="Enter Password:"><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-black">Register</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->
    <!-- Modal -->
    <div class="modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Forgot Password</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form>
        <input type="text" class="form-control" name="FEmail" placeholder="Enter Email:"><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-black">Confirm</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->

@endsection


@section('js')
<script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
<script src= "{{ URL::asset('js/bootstrap4.js') }}" type="text/javascript"></script>

@endsection