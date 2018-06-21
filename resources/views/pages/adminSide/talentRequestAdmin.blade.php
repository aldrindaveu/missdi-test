@extends('main')

@section('title', 'Talent Request')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Talent Requests
      </p>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Requests</h3>

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
                  <th>Project Name</th>
                  <th>Location</th>
                  <th>Requirements</th>
                  <th>Booking Agent Name</th>
                  <th>Remarks</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>1222</td>
                  <td>Kiddie Summer Fashion Show</td>
                  <td>SM Mall of Asia</td>
                  <td>5-9 years old, Cute, Charming, Chubby</td>
                  <td>SM Youth Creative Team</td>
                  <td><span class="label label-danger">Urgent</span></td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><button class="btn btn-black" data-toggle="modal" data-target="#requestDetail">Details</button></td>
                </tr>
                <tr>
                  <td>1223</td>
                  <td>Stick O TVC Casting</td>
                  <td>SM Mall of Asia</td>
                  <td>4-9 years old, Charming</td>
                  <td>Stick O TVC Creative Team</td>
                  <td><span class="label label-danger">Urgent</span></td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><button class="btn btn-black">Details</button></td>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          
                    
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- Applicant's Details Modal-->

    <div class="modal fade" id="requestDetail">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Talent Request Details</h4>
              </div>
              <div class="modal-body">
                
                <div class="container">
                  <div class="row">
                    <div class="col-md-9">
                      <hr style="width: 80%;">
                        <center><h1>Kiddie Summer Fashion Show</h1></center>
                      <hr style="width: 80%;">
                      <div class="form-group">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                                <h4><b>Location: </b>SM Mall of Asia</h4>
                                <h4><b>Requirements Description: </b>5-9 years old, Cute, Charming, Chubby<h4>
                                <h4><b>Booking Agent: </b>SM Youth Creative Team</h4>
                                <h4><b>Remarks: </b><span class="label label-danger">Urgent</span></h4>
                                <h4><b>Project Description: </b></h4>
                            </div>
                            </div>
                            
                          
                            
                        </div> 
                      </div>
                    </div>
                   
                  </div><!--/row -->
                </div> <!-- /modal -->
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-black" class="btnSave" data-dismiss="modal">Choose Talent(s) to Send</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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