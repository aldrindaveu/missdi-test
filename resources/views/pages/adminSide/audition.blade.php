@extends('main')

@section('title', 'Pending Applications')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Auditions
      </p>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pending Auditions</h3>

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
                  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>2909</td>
                  <td>Keith Enojas</td>
                  <td>12</td>
                  <td>female</td>
                  <td>Manila</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><button class="btn btn-black" data-toggle="modal" data-target="#applicantDetails">Details</button></td>
                </tr>
                <tr>
                  <td>2912</td>
                  <td>Ashley Nuguid</td>
                  <td>10</td>
                  <td>male</td>
                  <td>Quezon City</td>
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
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Audition Passers</h3>

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
                  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>2979</td>
                  <td>Sophia Candelario</td>
                  <td>8</td>
                  <td>female</td>
                  <td>Manila</td>
                  <td><span class="label label-success">Passed</span></td>
                  <td><button class="btn btn-black" data-toggle="modal" data-target="#auditionPasserDetails">Details</button></td>
                </tr>
                <tr>
                  <td>2980</td>
                  <td>Ivann Fernandez</td>
                  <td>6</td>
                  <td>male</td>
                  <td>Quezon City</td>
                  <td><span class="label label-success">Passed</span></td>
                  <td><button class="btn btn-black">Details</button></td>
                </tr>
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    </div>

      <div class="modal fade" id="auditionPasserDetails">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Audition Details</h4>
              </div>
              <div class="modal-body">
                
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <hr style="width: 70%;">
                      <div class="form-group">
                        
                        <center><h1>SOPHIA CANDELARIO</h1></center>
                      </div>
                      <div class="form-group">
                        <center><h4> #113 Quirino Avenue, Manila  |  8 Years Old | Female</h4></center>
                      </div>
                      <hr style="width: 70%;">
                      <br><br>
                      <table>
                        <tr>
                          <td><p style="font-size: 20px;"><b>VTR Score:</b></p></td>
                          <td><p style="font-size: 20px;">85%</p></td>
                        </tr>
                        <tr>
                          <td><p style="font-size: 20px;"><b>Interview Score:</b></p></td>
                          <td><p style="font-size: 20px;">89%</p></td>
                        </tr>
                        <tr>
                          <td><p style="font-size: 20px;"><b>Overall Score:</b></p></td>
                          <td><p style="font-size: 20px;">87%</p></td>
                        </tr>
                      </table>

                    </div>
                    <div class="col-md-6">
                      <br>
                      <div>
                        <a href="../dist/img/sophia.jpg"><img class="applicantPhoto" src="../dist/img/sophia.jpg" alt="Photo" width="50%"></a>
                      </div>
                    </div>
                  </div><!--/row -->
                </div> <!-- /modal -->
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                
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