@extends('main')

@section('title', 'Dashboard')

@include('partials._adminPrelims')

@section('content')
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Dashboard
      </p>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua-gradient">
            <div class="inner" >
              <h3>{{ $count }}</h3>
              <p>Pending Applications</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/talent-application-pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green-gradient">
            <div class="inner">
              <h3>12<sup style="font-size: 20px"></h3>

              <p>Talent Requests</p>
            </div>
            <div class="icon">
              <i class="fa fa-refresh"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow-gradient">
            <div class="inner">
              <h3>29</h3>

              <p>Recent Deployment</p>
            </div>
            <div class="icon">
              <i class="fa fa-paper-plane-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red-gradient">
            <div class="inner">
              <h3>20</h3>

              <p>Recently Added Talents</p>
            </div>
            <div class="icon">
              <i class="fa fa-plus-circle"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-8">
          <!-- BAR CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Booking Surge</h3>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- PROJECTS LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recent Projects</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/rhlogo.jpg" alt="Product Image">
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
                    <img src="dist/img/pantenelogo.jpg" alt="Product Image">
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
                    <img src="dist/img/met.jpg" alt="Product Image">
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
                    <img src="dist/img/colgatelogo.gif" alt="Product Image">
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
        <section class="col-lg-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">TOP TALENT OF THE MONTH</h3>
            </div>
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle imgcircle" src="../../dist/img/cole-sprouse.png" alt="User profile picture">

              <h3 class="profile-username text-center">Cole Sprouse</h3>

              <p class="text-muted text-center">Member since 2016</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Requests</b> <a class="pull-right">560</a>
                </li>
                <li class="list-group-item">
                  <b>Total Projects Made</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Rating</b> <a class="pull-right">526<i class="fa fa-star"></i></a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
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

<script type="text/javascript">
$(function () {
    "use strict";
//BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: 'JAN', a: 40, b: 30, c:20},
        {y: 'FEB', a: 30, b: 65, c:30},
        {y: 'MAR', a: 50, b: 40, c:40},
        {y: 'APR', a: 75, b: 65, c:50},
        {y: 'MAY', a: 50, b: 40, c:60},
        {y: 'JUN', a: 75, b: 65, c:70},
        {y: 'JUL', a: 60, b: 40, c:80},
        {y: 'AUG', a: 100, b: 90, c:30},
        {y: 'SEP', a: 80, b: 80, c:90},
        {y: 'OCT', a: 50, b: 70, c:80},
        {y: 'NOV', a: 90, b: 60, c:50},
        {y: 'DEC', a: 100, b: 80, c:60}
      ],
      barColors: ['#000', '#666', '#999'],
      xkey: 'y',
      ykeys: ['a', 'b', 'c'],
      labels: ['KIDS', 'TEENS', 'ADULTS'],
      hideHover: 'auto'
    });
  });
</script>

@endsection