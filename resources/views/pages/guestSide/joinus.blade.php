@extends('pages.guestPage')

@section('title', 'Join Us')

@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection

@section('content')

<br><br><br><br><br><br>
		<section class="container">
			<center><h3>JOIN US!</h3></center><br>
			<br>
			    <div class="stepwizard">
			        <div class="stepwizard-row setup-panel">
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
			    
			    <form method="POST" action="{{ route('joinUsSubmit') }}" enctype="multipart/form-data">
			    	{{ csrf_field() }}
			        <div class="panel panel-primary setup-content" id="step-1">

			            <div>
			                 <h4>Personal Information</h4>
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
							<div class="col-md-2">
								<label>*Complete Address</label>
							</div>
								<div class="col-md-6">
									<input type="text" class="form-control" id="inputAddress"  placeholder="*Street, Barangay, Town, Province/City" required="required" name="address">
								</div>
							<div class="col-md-1">
								<label>*Gender</label>
							</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" checked>
								  <label class="form-check-label" for="exampleRadios1">
								    Male
								  </label>
								</div>&nbsp&nbsp&nbsp
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="0">
								  <label class="form-check-label" for="exampleRadios2">
								    Female
								  </label>
								</div>
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
								<input type="date" id="inputName" class="form-control" required="required" name="birthdate">
							</div>
							<div class="col-md-1">
								<label for="inputBirthplace" value="Birthplace">*Birthplace: </label>
							</div>
							<div class="col-md-5">
								<input type = "text" class="form-control"  id="inputBirthplace" placeholder="Birthplace" required="required" name="birthplace">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<input type = "number" class="form-control numberField" name="cellphoneNum" id="inputMobNo" placeholder="*Cellphone Number" required="required" min="0" max="9999999999" maxlength="11">
							</div>
							<div class="col-md-6">
								<input type = "number" class="form-control numberField" name="telephoneNum" id="inputTelNo" placeholder="Telephone Number" min="0" maxlength="7" >
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<input type = "email" class="form-control" name="email" 	id="inputEmail" placeholder="*Email" required="required">
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
								<input type = "text" class="form-control" name="fatherName" id="inputFatherName" placeholder=			"*Father Name" required="required">
							</div>
							<div class="col-md-5">
								<input type = "text" class="form-control" name="fOccupation" 	id="inputFatherOcc" placeholder="*Father Occupation" required="required">
							</div>
						</div> 
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-7">
								<input type = "text" class="form-control" name="motherName" id="inputMotherName" placeholder=			"*Mother Name" required="required">
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
			            <div>
			                 <h4>Educational Background</h4>
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
								<input type = "text" class="form-control" name= "highSchool" id="inputHighSchool" placeholder=	"*High School" required="required">
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
			            <div>
			                 <h4>Measurement</h4>
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
			            <div>
			                 <h4>Upload Photos</h4>
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
			</section>
			<br><br>

@endsection

@section('js')

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