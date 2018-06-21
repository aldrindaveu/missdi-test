@extends('main')

@section('title', 'Deployment')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Schedules
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-calendar"></i> Home</a></li>
        <li class="active">Schedules</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Talent Schedule</h3>

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
                  <th>Project End Date</th>
                  <th>Project Description</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>1004</td>
                  <td>John Daniel Buri</td>
                  <td>04-25-2018</td>
                  <td>Burger King TVC Casting.</td>
                  <td><span class="label label-warning">In Project</span></td>
                </tr>
                <tr>
                  <td>1008</td>
                  <td>Mark Christian Dacles</td>
                  <td>03-07-2018</td>
                  <td>SM Youth Summer Fashion Show.</td>
                  <td><span class="label label-success">Available</span></td>
                </tr>
                <tr>
                  <td>1009</td>
                  <td>Harold Lemuel De Asis</td>
                  <td>02-28-2018</td>
                  <td>Bench body TVC Casting.</td>
                  <td><span class="label label-warning">In Project</span></td>
                </tr>
                <tr>
                  <td>1029</td>
                  <td>Charlito Fernandez</td>
                  <td>04-25-2018</td>
                  <td>GSM Blue TVC Casting.</td>
                  <td><span class="label label-success">Available</span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Audition Schedule</h3>

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
                  <th>Address</th>
                  <th>Audition Date</th>
                  <th>Comments</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1010</td>
                  <td>Jacky Samson</td>
                  <td>15</td>
                  <td>Quezon City</td>
                  <td>04-15-2018</td>
                  <td>Wear light make up.</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><span><button class="btn btn-black" data-toggle="modal" data-target="#updateAuditionSchedModal">Update</button></span></td>
                </tr>
                <tr>
                  <td>1011</td>
                  <td>Ella Tatel</td>
                  <td>25</td>
                  <td>Bulacan</td>
                  <td>04-15-2018</td>
                  <td>Wear light make up.</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><span><button class="btn btn-black" data-toggle="modal" data-target="#updateAuditionSchedModal">Update</button></span></td>
                </tr>
                <tr>
                  <td>1012</td>
                  <td>Anthony Tanoy</td>
                  <td>21</td>
                  <td>Quezon City</td>
                  <td>04-15-2018</td>
                  <td>None.</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><span><button class="btn btn-black" data-toggle="modal" data-target="#updateAuditionSchedModal">Update</button></span></td>
                </tr>
                <tr>
                  <td>1013</td>
                  <td>Ria Gie Banal</td>
                  <td>16</td>
                  <td>Manila</td>
                  <td>04-15-2018</td>
                  <td>None.</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td><span><button class="btn btn-black" data-toggle="modal" data-target="#updateAuditionSchedModal">Update</button></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- PROJECTS LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recent Projects</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="../dist/img/rhlogo.jpg" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Red Horse TVC 2018</a>
                    <span class="product-description">
                          "Di mo alam kung saan ka lulugar..." ASC Ref No. S010P022118R.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="../dist/img/pantenelogo.jpg" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Pantene TVC 2018</a>
                    <span class="product-description">
                          Pantene Summer Rescue Shampoo with Gabbi Garcia.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="../dist/img/met.jpg" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Met Tathione TVC 2017</a>
                    <span class="product-description">
                          Met Tathione TVC with Dingdong Dantes, Maja Salvador, and Kathryn Bernardo.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="../dist/img/colgatelogo.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Colgate TVC 2017</a>
                    <span class="product-description">
                          Brush, brush, brush, 3 times a day with Colgate...
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Projects</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

                    
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
<!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Event #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Event #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Project #1</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Project #2</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          
         
          <!-- /.box -->

          
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
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