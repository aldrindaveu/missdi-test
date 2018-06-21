@extends('main')
@section('title', 'Talents')

@include('partials._adminPrelims')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <p class="headerText">
        Add New Talent
      </p>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-grey">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Talent</h3>

              
            </div>
            <!-- /.box-header -->
              <div class="container">
                <br>
                <div class="stepwizard">
              <div class="stepwizard-row setup-panel" >
                  <div class="stepwizard-step col-xs-3"> 
                      <a href="#step-1" role="button" class="btn btn-black btn-circle" disabled="disabled">1</a>
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
          
          <form role="form" method="POST" action="{{ route('addNewTalentSubmit') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                        <input type="text" class="form-control" id="inputName"  placeholder="*Last name" required="required" name="lastName">
                      </div>
                      <div  class="col-md-4">
                        <input type="text" class="form-control" id="inputName"  placeholder="*First name" required="required" name="firstName">
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="inputName"  placeholder="*Middle name" required="required" name="middleName">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-xs-2">
                        <label>*Complete Address</label>
                      </div>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputAddress"  placeholder="*Street, Barangay, Town, Province/City" required="required" name="address">
                        </div>
                      <div class="col-sm-1">
                        <label>*Gender</label>
                      </div>
                        <div class="form-check col-sm-1">
                          <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" checked>
                          <label class="form-check-label" for="exampleRadios1">
                            Male
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="0">
                          <label class="form-check-label" for="exampleRadios2">
                            Female
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
            <div class="row">
              <div class="col-sm-1">
                <label for="inputBirthdate" value="Birthdate">*Birthdate:</label>
              </div>
              <div class="col-sm-5">
                <input type="date" id="inputName" class="form-control" required="required" name="birthdate">
              </div>
              <div class="col-sm-1">
                <label for="inputBirthplace" value="Birthplace">*Birthplace: </label>
              </div>
              <div class="col-sm-5">
                <input type = "text" class="form-control"  id="inputBirthplace" placeholder="Birthplace" required="required" name="birthplace">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-5">
                <input type = "number" class="form-control numberField" name="cellphoneNum" id="inputMobNo" placeholder="*Cellphone Number" required="required" min="0" max="9999999999" maxlength="11">
              </div>
              <div class="col-md-5">
                <input type = "number" class="form-control numberField" name="telephoneNum" id="inputTelNo" placeholder="Telephone Number" min="0" maxlength="7" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type = "email" class="form-control" name="email"   id="inputEmail" placeholder="*Email" required="required">
              </div>
                <div class="col-md-6">
                <input type = "text" class="form-control" name="citizenship" id="inputCitizenship" placeholder="*Citizenship" required="required">
              </div>
            </div> 
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-1">
                <label for="skills" >*Skills</label>
              </div>
              <div class="col-md-11">
                <textarea id="skills" class="form-control" required="required" name="skills"> </textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-7">
                <input type = "text" class="form-control" name="fatherName" id="inputFatherName" placeholder=     "*Father Name" required="required">
              </div>
              <div class="col-md-5">
                <input type = "text" class="form-control" name="fOccupation"  id="inputFatherOcc" placeholder="*Father Occupation" required="required">
              </div>
            </div> 
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-7">
                <input type = "text" class="form-control" name="motherName" id="inputMotherName" placeholder=     "*Mother Name" required="required">
              </div>
              <div class="col-md-5">
                <input type = "text" class="form-control" name="mOccupation" id="inputMotherOcc" placeholder="*Mother Occupation" required="required" required="required">
              </div>
            </div> 
          </div><br>
                      <center><button class="btn btn-black nextBtn" >Next</button></center>
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
              <br><div class="col-md-8 ">
                <input type = "text" class="form-control" name= "elemSchool" id="inputElem" placeholder="*Elementary School" required="required">
              </div>
            </div>
            <br>High School Background<br><br>
            <div class="row">
              <div class="col-md-8">
                <input type = "text" class="form-control" name= "highSchool" id="inputHighSchool" placeholder=  "*High School" required="required">
              </div>
              
            </div>
            <br>College Background<br><br>
            <div class="row">
              <div class="col-md-4">
                <input type = "text" class="form-control" name= "college" id="inputCollegeSchool" placeholder="*College" required="required">
              </div>
              <div class="col-md-4">
                <input type = "text" class="form-control" name= "degree" id="inputCollegeDegree" placeholder="*Degree" required="required">
              </div>
              
            </div><br>
                      <center><button class="btn btn-black nextBtn">Next</button></center>
                  </div>
              </div>
              
              <div class="panel panel-primary setup-content" id="step-3">
                  <div class="panel-heading">
                       <h4 class="panel-title">Measurement</h4>
                  </div>
                  <br>
                  <div class="panel-body">
                      <small id="required" class="form-text text-muted"><em>*Required Fields...</em></small>
          <br>
          <div class="row">
            <div class="col-md-1">
              <label for="inputHeight" value="Height">*Height:</label>
            </div>
            <div class="col-md-5">
              <input type = "number" class="form-control numberField" name= "height" id="inputHeight" placeholder="(inches)" required="required">
            </div>
            <div class="col-md-1">
              <label for="inputWeight" value="Width">*Weight:</label>
            </div>
            <div class="col-md-5">
              <input type = "number" class="form-control numberField" name= "weight" id="inputWeight" placeholder="(kg)" required="required">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-1">
              <label for="inputBust" value="Bust">*Bust:</label>
            </div>
            <div class="col-md-5">
              <input type = "number" class="form-control numberField" name= "bust" id="inputBust" placeholder="(inches)" required="required">
            </div>
            <div class="col-md-1">
              <label for="inputWaist" value="Waist">*Waist:</label>
            </div>
            <div class="col-md-5">
              <input type = "number" class="form-control numberField" name= "waist" id="inputWaist" placeholder="(inches)" required="required">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-1">
              <label for="inputHips" value="Bust">*Hips:</label>
            </div>
            <div class="col-md-5">
              <input type = "number" class="form-control numberField" name= "hips" id="inputHips" placeholder="(inches)" requried="required">
            </div>
            
          </div><br>
                      <center><button class="btn btn-black nextBtn" type="button">Next</button></center>
                  </div>
              </div>
              
              <div class="panel panel-primary setup-content" id="step-4">
                  <div class="panel-heading">
                       <h4 class="panel-title">Upload Photos</h4>
                  </div>
                  <br>
                  <small id="required" class="form-text text-muted"><em>*Required Fields...</em></small>
                  <br>
                  <div class="panel-body">
                      <div class="row">
            <div style="float:left; width:50%; text-align: center">
              Head Shot: <input type="file" class="btn btn-black" name="headImgPath">
            </div>
            <div style="float:right; width:50%; text-align: center">
              Full Body Shot: <input type="file" class="btn btn-black" name="fullImgPath">
            </div>
          </div><br><br><br>
                      <center><input class="btn btn-info" type="submit" value="Finish"></center>
                  </div>
              </div>
          </form>
              </div>
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

<script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
    <script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
    <script src= "{{ URL::asset('js/bootstrap4.js') }}" type="text/javascript"></script>
    <script>
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
                  navListItems.removeClass('btn-black').addClass('btn-default');
                  $item.addClass('btn-black');
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

          $('div.setup-panel div a.btn-black').trigger('click');
      });
    </script>

@endsection