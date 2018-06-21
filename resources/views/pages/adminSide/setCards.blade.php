@extends('main')

@section('title', 'Talents')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Set Cards
      </p>
    </section>
     <!-- Main content -->
    <section class="content">
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
                <div class="col-xs-3">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                      <div class="front">
                        <div class="talentItem">
                          <div class="talentBody">
                              <img src="../../dist/images/kids-boys/kg (20).jpg" alt="Head Shot Pic" width="200px">
                              <div class="talentNameDiv"><p class="talentNameText">Jughead Jones</p></div>
                          </div>
                        </div>
                      </div>
                      <div class="back">
                        <div class="talentItem">
                          <div class="talentBody">
                            <hr style="border-top:1px solid #999">
                              <p class="talentNameText">Jughead Jones</p>
                              <hr style="border-top:1px solid #999">
                              <h5>Manila | 9 years old</h5>
                              <br>
                              <button class="btn btn-black" data-toggle="modal" data-target="#setCardModal">VIEW SETCARD</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               <!-- /.flip-container-->
                </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (1).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Zach Dempsey</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Zach Dempsey</p>
                          <hr style="border-top:1px solid #999">
                          <h5>QC | 10 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (2).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Kevin Keller</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Kevin Keller</p>
                          <hr style="border-top:1px solid #999">
                          <h5>Manila | 8 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (3).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Robert downy</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Robert Downy</p>
                          <hr style="border-top:1px solid #999">
                          <h5>Manila | 7 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <div class="row">
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
                <div class="col-xs-3">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                      <div class="front">
                        <div class="talentItem">
                          <div class="talentBody">
                              <img src="../../dist/images/kids-boys/kg (20).jpg" alt="Head Shot Pic" width="200px">
                              <div class="talentNameDiv"><p class="talentNameText">Jughead Jones</p></div>
                          </div>
                        </div>
                      </div>
                      <div class="back">
                        <div class="talentItem">
                          <div class="talentBody">
                            <hr style="border-top:1px solid #999">
                              <p class="talentNameText">Jughead Jones</p>
                              <hr style="border-top:1px solid #999">
                              <h5>Manila | 9 years old</h5>
                              <br>
                              <button class="btn btn-black" data-toggle="modal" data-target="#setCardModal">VIEW SETCARD</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               <!-- /.flip-container-->
                </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (1).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Zach Dempsey</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Zach Dempsey</p>
                          <hr style="border-top:1px solid #999">
                          <h5>QC | 10 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (2).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Kevin Keller</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Kevin Keller</p>
                          <hr style="border-top:1px solid #999">
                          <h5>Manila | 8 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (3).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Robert downy</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Robert Downy</p>
                          <hr style="border-top:1px solid #999">
                          <h5>Manila | 7 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

      <div class="row">
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
                <div class="col-xs-3">
                  <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper">
                      <div class="front">
                        <div class="talentItem">
                          <div class="talentBody">
                              <img src="../../dist/images/kids-boys/kg (20).jpg" alt="Head Shot Pic" width="200px">
                              <div class="talentNameDiv"><p class="talentNameText">Jughead Jones</p></div>
                          </div>
                        </div>
                      </div>
                      <div class="back">
                        <div class="talentItem">
                          <div class="talentBody">
                            <hr style="border-top:1px solid #999">
                              <p class="talentNameText">Jughead Jones</p>
                              <hr style="border-top:1px solid #999">
                              <h5>Manila | 9 years old</h5>
                              <br>
                              <button class="btn btn-black" data-toggle="modal" data-target="#setCardModal">VIEW SETCARD</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               <!-- /.flip-container-->
                </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (1).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Zach Dempsey</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Zach Dempsey</p>
                          <hr style="border-top:1px solid #999">
                          <h5>QC | 10 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (2).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Kevin Keller</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Kevin Keller</p>
                          <hr style="border-top:1px solid #999">
                          <h5>Manila | 8 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xs-3">
              <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                  <div class="front">
                    <div class="talentItem">
                      <div class="talentBody">
                          <img src="../../dist/images/kids-boys/kg (3).jpg" alt="Head Shot Pic" width="200px">
                          <div class="talentNameDiv"><p class="talentNameText">Robert downy</p></div>
                      </div>
                    </div>
                  </div>
                  <div class="back">
                    <div class="talentItem">
                      <div class="talentBody">
                        <hr style="border-top:1px solid #999">
                          <p class="talentNameText">Robert Downy</p>
                          <hr style="border-top:1px solid #999">
                          <h5>Manila | 7 years old</h5>
                          <br>
                          <a href="#" role="button" class="btn btn-black">VIEW SETCARD</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
          <div class="modal fade" id="setCardModal">
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
                      <hr style="width: 70%;">
                      <center><h1>JUGHEAD JONES</h1></center>
                      <div class="form-group">
                        <center><h4> #283 Taft Avenue, Manila  |  9 Years Old | Male</h4></center>
                      </div>
                      <hr style="width: 70%;">
                      <div class="row">
                        <div class="col-md-4">
                          <img class="applicantPhoto" src="images/kids-boys/kg (22).jpg" alt="Photo" width="95%">
                        </div>
                        <div class="col-md-4">
                          <img class="applicantPhoto" src="images/kids-boys/kg (16).jpg" alt="Photo" width="95%">
                        </div>
                        <div class="col-md-4">
                          <img class="applicantPhoto" src="images/kids-boys/kg (23).jpg" alt="Photo" width="95%">
                        </div>
                      </div>
                    </div><!--/col-md-6 -->
                    <div class="col-md-6">
                      <br>
                      <div>
                        <a href="images/kids-boys/kg (20).jpg"><img class="applicantPhoto" src="images/kids-boys/kg (20).jpg" alt="Photo" width="50%"></a>
                      </div>
                    </div>
                </div>
                
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-black" data-toggle="modal" data-target="#scheduleApplicant" data-dismiss="modal">Save Changes </button>
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