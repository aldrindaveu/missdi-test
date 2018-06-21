@extends('main')

@section('title', 'Users')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Users Management
      </p>
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-black" data-toggle="modal" data-target="#request">New  Account</button>
              <h3 class="box-title"></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                  <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                  @foreach ($accounts as $account)

                    <tr>
                    <td>{{ $account->id }}</td>
                    <td>{{ $account->username }}</td>
                    <td>{{ $account->email }}</td>
                    <td><span class="label label-success">Active</span></td>
                    <td><div class="btn-group">
                          <button type="button" class="btn btn-black" data-toggle="modal" data-target="#">Edit</button>
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#">Suspend</button>
                        </div>
                    </td>
                  </tr>

                @endforeach            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- modal -->
  <div class="modal fade" id="request">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Account</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="username">
                          Username:
                        </label>
                      </div>
                      <div class="col-md-9">
                        <input id="username" name="username" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="password">
                          Password:
                        </label>
                      </div>
                      <div class="col-md-9">
                        <input id="password" name="password" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="confirmPassword">
                          Confirm Password:
                        </label>
                      </div>
                      <div class="col-md-9">
                        <input id="confirmpassword" name="confirmPassword" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-3">
                        <label for="accountType">
                          Account Type:
                        </label>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control" name="accountType">
                          <option>Choose</option>
                          <option value="1">Admin Account</option>
                          <option value="3">Talent Account</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-black" class="btnSave" data-dismiss="modal">Submit</button>
              </div>
            </div><!--/row -->
          </div> <!-- /modal -->    
  </div>
              
          
@endsection

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
  <script src="{{ URL::asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ URL::asset('bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ URL::asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<script src="{{ URL::asset('bower_components/chart.js/Chart.js') }}"></script>
<!-- fullCalendar -->
<script src="{{ URL::asset('bower_components/moment/moment.js') }}"></script>
<script src="{{ URL::asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>

@endsection