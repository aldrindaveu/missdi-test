@extends('main')

@section('title', 'Profile')
@include('partials._talentSideprelims')

@section('content')
   <section class="content-wrapper">
        <div class="row userprofilecontent">
          <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
           <div class="box box-widget widget-user-2" >
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header widgetuserheader">
              <div class="row">
                <div class="widget-user-image col-md-2">
                  <img class="img-circle imgcircle" src="@if (isset(Auth::user()->username)) {{Auth::user()->displayPicture}} @endif"  alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <div class="col-md-10">
                  <h3 class="widget-user-username widgetuserusername" >@if (isset(Auth::user()->username)) {{Auth::user()->username}} @endif</h3><br>
                  <h5 class="widget-user-desc widgetuserdesc">Member since @if (isset(Auth::user()->username)) {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('M d, Y')}} @endif &nbsp | &nbsp Talent</h5>
                  <h5 class="widget-user-desc widgetuserdesc"><a href="#userprofilecontent" role="button">  Edit Profile </a></h5>
               </div>
              </div>
             
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row userprofilecontent" id="userprofilecontent">
        <div class="col-md-12">
          <div class="box box-grey">
            <div class="box-header with-border">
              <h3 class="box-title">Customer Contact Information</h3>
            </div>
            <!-- /.box-header -->
              <section class="container">
                <br>
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step col-xs-3"> 
                                <a href="#step-1" role="button" class="btn btn-success btn-circle">1</a>
                                <p><small>Personal Information</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3"> 
                                <a href="#step-2" role="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <p><small>Educational Background</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3"> 
                                <a href="#step-3" role="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p><small>Measurement</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3"> 
                                <a href="#step-4" role="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                <p><small>Upload Photos</small></p>
                            </div>
                        </div>
                    </div>
                    
                    <form role="form">
                      <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                          <h4 class="panel-title">Personal Information</h4>
                        </div>
                          <div class="panel-body">
                            <div class="form-group">
                            <br>
                              <small id="required" class="form-text text-muted"><em>*Required Fields...</em></small><br>
                              <label>*Full Name</label>
                              <div class="row">
                                <div class="col-md-4">
                                  <input type="text" class="form-control" id="inputName"  placeholder="*Last name" required="required">
                                </div>
                                <div  class="col-md-4">
                                  <input type="text" class="form-control" id="inputName"  placeholder="*First name" required="required">
                                </div>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" id="inputName"  placeholder="*Middle name" required="required">
                                </div>
                              </div>
                            </div>
                      <div class="form-group">
                        <label>*Complete Address</label>
                          <div class="row">
                            <div class="col-md-3">
                              <input type="text" class="form-control" id="inputAddress"  placeholder="*Street" required="required">
                            </div>
                            <div  class="col-md-3">
                              <input type="text" class="form-control" id="inputAddress"  placeholder="*Barangay" required="required">
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control" id="inputAddress"  placeholder="*Town" required="required">
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control" id="inputAddress"  placeholder="*City" required="required">
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-1">
                            <label for="inputBirthdate" value="Birthdate">*Birthdate:
                              </label>
                          </div>
                          <div class="col-md-5">
                            <input type="date" name= "inputBirthdate" id="inputName" class="form-control" required="required">
                          </div>
                          <div class="col-md-1">
                            <label for="inputBirthplace" value="Birthplace">*Birthplace: </label>
                          </div>
                          <div class="col-md-5">
                            <input type = "text" class="form-control" name= "inputBirthplace" id="inputBirthplace" placeholder="Birthplace" required="required">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <input type = "text" class="form-control" name= "inputMobNo" id="inputMobNo" placeholder="*Mobile Number" required="required">
                          </div>
                          <div class="col-md-6">
                            <input type = "text" class="form-control" name= "inputTelNo" id="inputTelNo" placeholder="Telephone Number" required="required">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <input type = "email" class="form-control" name= "inputEmail"   id="inputEmail" placeholder="*Email" required="required">
                          </div>
                            <div class="col-md-6">
                            <input type = "text" class="form-control" name="inputCitizenship" id="inputCitizenship" placeholder=   "*Citizenship" required="required">
                          </div>
                        </div> 
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-7">
                            <input type = "text" class="form-control" name=         "inputFatherName" id="inputFatherName" placeholder=     "*Father Name" required="required">
                          </div>
                          <div class="col-md-5">
                            <input type = "text" class="form-control" name= "inputFatherOcc"  id="inputFatherOcc" placeholder="*Father Occupation" required="required">
                          </div>
                        </div> 
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-7">
                            <input type = "text" class="form-control" name=         "inputMotherName" id="inputMotherName" placeholder=     "*Mother Name" required="required">
                          </div>
                          <div class="col-md-5">
                            <input type = "text" class="form-control" name= "inputMotherOcc" id="inputMotherOcc" placeholder="*Mother Occupation" required="required" required="required">
                          </div>
                        </div> 
                      </div><br><br><br>
                                <center><button class="btn btn-black nextBtn pull-right" role="button">Next</button></center>
                          </div>
                        </div>
                        
                      <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                            <h4 class="panel-title">Educational Background</h4>
                        </div>
                            <br>
                          <div class="panel-body">
                            <small id="required" class="form-text text-muted"><em>*Required Fields...</em></small>
                            <br>
                              Elementary School Background<br><br>
                            <div class="row">
                            <br>
                              <div class="col-md-7">
                                <input type = "text" class="form-control" name= "inputElem" id="inputElem" placeholder="*Elementary">
                              </div>
                              <div class="col-md-1">
                                <label for="inputEntElemYear" value="ElemYear">*S.Y:</label>
                              </div>
                              <div class="col-md-2">
                                <input type="text" name= "inputEntESchoolYear" id="inputName" class="form-control" placeholder="Year Entered">
                              </div>
                              <div class="col-md-2">
                                <input type="text" name= "inputExtESchoolYear" id="inputName" class="form-control" placeholder="Year Finished">
                              </div>
                            </div>
                              <br>High School Background<br><br>
                          <div class="row">
                            <div class="col-md-7">
                              <input type = "text" class="form-control" name= "inputHighSchool" id="inputHighSchool" placeholder= "*High School">
                            </div>
                            <div class="col-md-1">
                              <label for="inputEntHighSYear" value="HighSYear">*S.Y:</label>
                            </div>
                            <div class="col-md-2">
                              <input type="text" name= "inputEntHSSchoolYear" id="inputName" class="form-control" placeholder="Year Entered">
                            </div>
                            <div class="col-md-2">
                              <input type="text" name= "inputExtHSchoolYear" id="inputName" class="form-control" placeholder="Year Finished">
                            </div>
                          </div>
                          <br>College Background<br><br>
                          <div class="row">
                            <div class="col-md-4">
                              <input type = "text" class="form-control" name= "inputCollegeSchool" id="inputCollegeSchool" placeholder="*College">
                            </div>
                            <div class="col-md-3">
                              <input type = "text" class="form-control" name= "inputCollegeDegree" id="inputCollegeDegree" placeholder="*Degree">
                            </div>
                            <div class="col-md-1">
                              <label for="inpuEntCElemYear" value="CollegeSYear">*S.Y:</label>
                            </div>
                            <div class="col-md-2">
                              <input type="text" name= "inputEntCSchoolYear" id="inputName" class="form-control" placeholder="Year Entered">
                            </div>
                            <div class="col-md-2">
                              <input type="text" name= "inputExtCSchoolYear" id="inputName" class="form-control" placeholder="Year Finished">
                            </div>
                          </div><br><br><br>  
                                    <center><button class="btn btn-black nextBtn pull-right" type="button">Next</button></center>
                                </div>
                            </div>
                            
                            <div class="panel panel-primary setup-content" id="step-3">
                              <div class="panel-heading">
                                <h4 class="panel-title">Measurement</h4>
                              </div>
                                <br>
                                  <div class="panel-body">
                                    <small id="required" class="form-text text-muted"><em>*Required Fields...</em></small><br>
                                    <div class="row">
                                      <div class="col-md-1">
                                        <label for="inputHeight" value="Height">*Height:</label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type = "text" class="form-control" name= "inputHeight" id="inputHeight" placeholder="(inches)">
                                      </div>
                                      <div class="col-md-1">
                                        <label for="inputWeight" value="Width">*Weight:</label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type = "text" class="form-control" name= "inputWeight" id="inputWeight" placeholder="(kg)">
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-1">
                                        <label for="inputBust" value="Bust">*Bust:</label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type = "text" class="form-control" name= "inputBust" id="inputBust" placeholder="(inches)">
                                      </div>
                                      <div class="col-md-1">
                                        <label for="inputWaist" value="Waist">*Waist:</label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type = "text" class="form-control" name= "inputWaist" id="inputWaist" placeholder="(inches)">
                                      </div>
                                    </div><br>
                                    <div class="row">
                                      <div class="col-md-1">
                                        <label for="inputHips" value="Bust">*Hips:</label>
                                      </div>
                                      <div class="col-md-5">
                                        <input type = "text" class="form-control" name= "inputHips" id="inputHips" placeholder="(inches)">
                                      </div>
                                    </div><br><br><br>
                                      <center><button class="btn btn-black nextBtn pull-right" type="button">Next</button></center>
                                  </div>
                            </div>
                            
                        <div class="panel panel-primary setup-content" id="step-4">
                            <div class="panel-heading">
                              <h4 class="panel-title">Upload Photos</h4>
                            </div><br>
                              <small id="required" class="form-text text-muted"><em>*Required Fields...</em></small><br>
                            <div class="panel-body">
                              <div class="row" style="padding:30px">
                                <div style="float:left; width:50%; text-align: center">
                                  Head Shot: <input type="file" class="btn btn-black" style="float:right">
                                </div>
                                <div style="float:right; width:50%; text-align: center">
                                  Full Body Shot: <input type="file" class="btn btn-black" style="float:right">
                                </div>
                              </div><br><br><br>
                                <center><button class="btn btn-black pull-right" type="submit">Finish!</button></center>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
          </div>
        </div>
</section>
@endsection

@section('footer')
  @include('partials._footer')
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
  $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>

@endsection

