@extends('main')
@section('title', 'Talents')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Talents
      </p>
    </section>

    <!-- Main content -->
    <section class="content">
      <a href="/add-new-talent"><button class="btn btn-black"> New Talent </button></a><br><br>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Talents: Kids</h3>

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
                  <th>Actions</th>
                </tr>
                @php $recordCounter =0; @endphp
                @foreach ($applicants as $applicant)

                @if(Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') <= 12 )
                @php $recordCounter = $recordCounter+1 ; @endphp
                  <tr>
                    <td>{{ $applicant->personalinfo->id }}</td>
                    <td>{{ $applicant->personalinfo->lastName }}, {{ $applicant->personalinfo->firstName }} {{ $applicant->personalinfo->middleName }}
                    </td>
                    <td>{{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }}</td>
                    <td>@if($applicant->personalInfo->gender == 1) 
                          MALE
                        @elseif($applicant->personalInfo->gender == 0)
                          FEMALE 
                        @endif</td>
                    <td>{{ $applicant->personalinfo->birthplace}}</td>
                    <td><button class="btn btn-black" data-toggle="modal" data-target="#{{ $applicant->id }}">Update</button></td>
                  </tr>
                  @endif
                @endforeach
              </table>
              @if($recordCounter == 0)
                <center><h1>NO RECORD</h1></center>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>

    <!-- /.content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Talents: Teens</h3>

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
                  <th>Actions</th>
                </tr>
                @php 
                  $recordCounter =0;
                @endphp
                @foreach ($applicants as $applicant)
                @if(Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') >= 13 && Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') <= 19 )
                @php $recordCounter = $recordCounter+1 ; @endphp
                  <tr>
                    <td>{{ $applicant->personalinfo->id }}</td>
                    <td>{{ $applicant->personalinfo->lastName }}, {{ $applicant->personalinfo->firstName }} {{ $applicant->personalinfo->middleName }}</td>
                    <td>{{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }}</td>
                    <td>@if($applicant->personalInfo->gender == 1) 
                          MALE
                        @elseif($applicant->personalInfo->gender == 0)
                          FEMALE 
                        @endif</td>
                    <td>{{ $applicant->personalinfo->address}}</td>
                    <td><button class="btn btn-black" data-toggle="modal" data-target="#{{$applicant->id}}">Update</button></td>
                  </tr>
                  @endif
                @endforeach  
              </table>
              @if($recordCounter == 0)
                <center><h1>NO RECORD</h1></center>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>


    <!-- /.content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List of Talents: Adults</h3>

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
                  <th>Actions</th>
                </tr>
                @php $recordCounter =0; @endphp
                @foreach ($applicants as $applicant)
                @if(Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') >= 20 )
                @php $recordCounter = $recordCounter+1; @endphp
                  <tr>
                    <td>{{ $applicant->personalinfo->id }}</td>
                    <td>{{ $applicant->personalinfo->lastName }}, {{ $applicant->personalinfo->firstName }} {{ $applicant->personalinfo->middleName }}</td>
                    <td>{{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }}</td>
                    <td>@if($applicant->personalInfo->gender == 1) 
                          MALE
                        @elseif($applicant->personalInfo->gender == 0)
                          FEMALE 
                        @endif</td>
                    <td>{{ $applicant->personalinfo->birthplace}}</td>
                    <td><button class="btn btn-black" data-toggle="modal" data-target="#{{$applicant->id}}">Update</button></td>
                  </tr>
                  @endif
                @endforeach  
              </table>
              @if($recordCounter == 0)
                <center><h1>NO RECORD</h1></center>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Applicant's Details Modal-->
    @foreach($applicants as $applicant)
    <div class="modal fade" id="{{$applicant->id}}">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update Talent Record</h4>
              </div>
              <div class="modal-body">
                
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <hr style="width: 70%;">
                      <div class="form-group">
                        
                        <center><h1>{{ $applicant->personalInfo->firstName }} {{ $applicant->personalInfo->middleName }} {{ $applicant->personalInfo->lastName }}</h1></center>
                      </div>
                      <div class="form-group">
                        <center><h4> {{ $applicant->personalInfo->address }} |  {{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }} Years Old | 
                                        @if($applicant->personalInfo->gender == 1) 
                                          MALE
                                        @elseif($applicant->personalInfo->gender == 0)
                                          FEMALE 
                                        @endif</h4></center>
                      </div>
                      <hr style="width: 70%;">

                      <form>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-2">
                              <label>Birthdate: </label>
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="birthdate" class="form-control">
                            </div>
                            <div class="col-md-2">
                              <label>Birthplace: </label>
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="birthplace" class="form-control">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-2">
                              <label>Mobile Number: </label>
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="cellphoneNum" class="form-control">
                            </div>
                            <div class="col-md-2">
                              <label>Telephone Number: </label>
                            </div>
                            <div class="col-md-4">
                              <input type="text" name="telephoneNum" class="form-control">
                            </div>
                          </div>
                        </div>
                      </form>

                      <!-- <table>
                        <tr>
                           <td><p><b>Birthdate:</b>
                           <td><input type = "Date"></p>
                          
                        </tr>
                        <tr>
                           <td> <p><b>Birthplace: </b>
                            <td>  <input type = "text">
                            </p>
                    </tr>
                    <tr>
                            <td><p><b>Mobile Number:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Telephone Number:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Email:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Citizenship:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Father's name:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Occupation:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Mother's name:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                        <tr>
                            <td><p><b>Occupation:</b>
                            <td><input type = "text">
                            </p>
                        </tr>
                       </table> -->
                    </div>

                    <div class="col-md-6">
                      <br>
                      <div>
                        <br><br><br>
                        <a href="{{ $applicant->headImgPath }}"><img class="applicantPhoto" src="{{ $applicant->headImgPath }}" alt="Photo" width="50%"></a>
                      </div>
                    </div>
                  </div><!--/row -->
                </div> <!-- /modal -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-black" data-toggle="modal" data-target="#scheduleApplicant" data-dismiss="modal" onclick="setSchedule()" data-dismiss="modal">Update</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        @endforeach
    <!-- /Applicant's Details Modal -->

      <!-- Applicant's Details Modal-->

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