@extends('main')

@section('title', 'Pending Applications')

@include('partials._adminPrelims')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <p class="headerText">
            Talent Applications
          </p>
        </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">KIDS</h3>
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
            <div class="box-body talentGallery">
                <div class="">
                    @php
                        $ctr=0;
                    @endphp

                    @foreach ($applicants as $applicant)
                        @if(Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') <= 12 )
                        @php
                          $ctr = $ctr+1;
                        @endphp
            <div class="col-xs-3">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <div class="talentItem">
                                <div class="">
                                    <img src="{{ $applicant->headImgPath }}" alt="Head Shot Pic" width="200px">
                                    <div class="talentNameDiv"><p class="talentNameText">{{ $applicant->personalInfo->firstName }}</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="talentItem">
                                <div class="">
                                  <hr style="border-top:1px solid #999">
                                    <p class="talentNameText">{{ $applicant->personalInfo->firstName }}</p>
                                    <hr style="border-top:1px solid #999">
                                    <h5>{{ $applicant->personalInfo->address }} | {{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }} years old</h5>
                                    <br>
                                    <button class="btn btn-black" data-toggle="modal" data-target="#{{$applicant->id}}">VIEW APPLICATION</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- /.flip-container-->
            </div>  <!-- end of col-xs-3 div -->
                        @if($ctr === 4)
                            @php
                              $ctr = 0;

                            @endphp
                            <p>&nbsp</p>
                        @endif
                        @endif
                    @endforeach            
                </div> <!-- end of unclassified div -->
            </div>
            <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.kids-->


        <!-- teens -->
        <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">TEENS</h3>
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
            <div class="box-body talentGallery">
                <div class="">
                    @php
                        $ctr=0;
                    @endphp

                    @foreach ($applicants as $applicant)
                        @if(Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') >= 13 && Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') <= 19 )
                        @php
                          $ctr = $ctr+1;
                        @endphp
            <div class="col-xs-3">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <div class="talentItem">
                                <div class="">
                                    <img src="{{ $applicant->headImgPath }}" alt="Head Shot Pic" width="200px">
                                    <div class="talentNameDiv"><p class="talentNameText">{{ $applicant->personalInfo->firstName }}</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="talentItem">
                                <div class="">
                                  <hr style="border-top:1px solid #999">
                                    <p class="talentNameText">{{ $applicant->personalInfo->firstName }}</p>
                                    <hr style="border-top:1px solid #999">
                                    <h5>{{ $applicant->personalInfo->address }} | {{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }} years old</h5>
                                    <br>
                                    <button class="btn btn-black" data-toggle="modal" data-target="#{{$applicant->id}}">VIEW APPLICATION</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- /.flip-container-->
            </div>  <!-- end of col-xs-3 div -->
                        @if($ctr === 4)
                            @php
                              $ctr = 0;

                            @endphp
                            <p>&nbsp</p>
                        @endif
                        @endif
                    @endforeach            
                </div> <!-- end of unclassified div -->
            </div>
            <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.teens-->

        <!-- adults -->
        <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">ADULTS</h3>
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
            <div class="box-body talentGallery">
                <div class="">
                    @php
                        $ctr=0;
                    @endphp

                    @foreach ($applicants as $applicant)
                        @if(Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') >= 20 )
                        @php
                          $ctr = $ctr+1;
                        @endphp
            <div class="col-xs-3">
                <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                        <div class="front">
                            <div class="talentItem">
                                <div class="">
                                    <img src="{{ $applicant->headImgPath }}" alt="Head Shot Pic" width="200px">
                                    <div class="talentNameDiv"><p class="talentNameText">{{ $applicant->personalInfo->firstName }}</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="back">
                            <div class="talentItem">
                                <div class="">
                                  <hr style="border-top:1px solid #999">
                                    <p class="talentNameText">{{ $applicant->personalInfo->firstName }}</p>
                                    <hr style="border-top:1px solid #999">
                                    <h5>{{ $applicant->personalInfo->address }} | {{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->diff(\Carbon\Carbon::now())->format('%y') }} years old</h5>
                                    <br>
                                    <button class="btn btn-black" data-toggle="modal" data-target="#{{$applicant->id}}">VIEW APPLICATION</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- /.flip-container-->
            </div>  <!-- end of col-xs-3 div -->
                        @if($ctr === 4)
                            @php
                              $ctr = 0;

                            @endphp
                            <p>&nbsp</p>
                        @endif
                        @endif
                    @endforeach            
                </div> <!-- end of unclassified div -->
            </div>
            <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.adults-->

        <!-- Applicant's Details Modal-->
                  @foreach($applicants as $applicant)
                  <div class="modal fade" id="{{$applicant->id}}">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Application Details</h4>
                            </div>
                            <div class="modal-body">
                              
                              <div class="container">
                                <div class="row">
                                  <div class="col-md-6">
                                    <hr style="width: 90%;">
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
                                    <hr style="width: 90%;">
                                      <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <p> <b>Birthdate: </b>{{ \Carbon\Carbon::parse($applicant->personalInfo->birthdate)->format('F d, Y')}}</p>
                                        </div>
                                        <div class="col-md-6">
                                          <p><b>Birthplace: </b>{{ $applicant->personalInfo->birthplace }}</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <p><b>Mobile Number:</b> {{ $applicant->personalInfo->cellphoneNum }}</p>
                                        </div>
                                        <div class="col-md-6">
                                          <p><b>Telephone Number:</b> {{ $applicant->personalInfo->telephoneNum }}</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <p><b>Email:</b> {{ $applicant->personalInfo->email }}</p>
                                        </div>
                                          <div class="col-md-6">
                                          <p><b>Citizenship:</b> {{ $applicant->personalInfo->citizenship }}</p>
                                        </div>
                                      </div> 
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <p><b>Father's name:</b> {{ $applicant->personalInfo->fatherName }}</p>
                                        </div>
                                        <div class="col-md-6">
                                          <p><b>Occupation:</b> {{ $applicant->personalInfo->fOccupation }}</p>
                                        </div>
                                      </div> 
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-md-6">
                                          <p><b>Mother's name:</b> {{ $applicant->personalInfo->motherName }}</p>
                                        </div>
                                        <div class="col-md-6">
                                          <p><b>Occupation:</b> {{ $applicant->personalInfo->mOccupation }}</p>
                                        </div>
                                      </div> 
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <br>
                                    <div>
                                      <a href="{{ $applicant->fullImgPath }}"><img class="applicantPhoto" src="{{ $applicant->fullImgPath }}" alt="Photo" width="50%"></a>
                                    </div>
                                  </div>
                                </div><!--/row -->
                              </div> <!-- /modal -->
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-black" data-toggle="modal" data-target="#a{{ $applicant->id }}" data-dismiss="modal">Set Audition Schedule</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      @endforeach
                  <!-- /Applicant's Details Modal -->


                    <!-- Schedule's Details Modal-->
                      @foreach($applicants as $applicant)
                      <div class="modal fade" id="a{{ $applicant->id }}">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title">Audition Schedule Details</h4>
                                </div>
                                <div class="modal-body">
                                  
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <hr style="width: 90%;">
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
                                        <hr style="width: 90%;">
                                        <div class="form-group">
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <label for="auditionDate">Audition Date: </label>
                                                    <input type="date" name= "auditionDate" id="auditionDate" class="form-control">
                                                  </div>
                                              </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-sm-6">
                                                  <label for="inputComment">Comments</label>
                                                  <textarea type="text" class="form-control" name="inputComment"></textarea>
                                                </div>
                                              </div>
                                            
                                              
                                          </div> 
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <br>
                                        <div>
                                          <a href="{{ $applicant->headImgPath }}"><img class="applicantPhoto" src="{{ $applicant->headImgPath }}" alt="Photo" width="50%"></a>
                                        </div>
                                      </div>
                                    </div><!--/row -->
                                  </div> <!-- /modal -->
                                  
                      
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-black" class="btnSave" onclick="setSchedule()" data-dismiss="modal">Save Schedule</button>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                      <!-- /Applicant's Details Modal -->
                      @endforeach
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
                            <div class="col-md-6"><br>
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