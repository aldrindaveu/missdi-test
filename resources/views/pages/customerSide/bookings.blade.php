@extends('main')

@section('title', 'Bookings')

@include('partials._customerSideprelims')

@section('content')
	<div class="content-wrapper">
    <section class="content-header">
        <h1>Booking Records</h1>
    </section>  
    <div class="content">
        <div class="row">
             
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
                 <br>
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
                  <th>Description</th>
                  <th>Location</th>
                  <th>Date Start</th>
                  <th>Date Finish</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>Colgate TVC 2020</td>
                  <td class="projDesc">Brush Brush Brush 3 times a day with colgate asdasdasdad...</td>
                  <td><span>Quezon City</span></td>
                  <td>12-12-2017</td>
                  <td>12-12-2017</td>
                  <td><span class="label label-success">Completed</span></td>
                  <td><span><button type="button" class="btn btn-black">Details</button></span></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Pantene TVC 2018</td>
                  <td class="projDesc">Pantene sunshine resource shampoo with Gabbi Garcia</td>
                  <td><span">Paris</span></td>
                  <td>03-12-2016</td> 
                  <td>12-12-2017</td>
                  <td><span class="label label-warning">On-Going</span></td>
                  <td><span><button type="button" class="btn btn-black">Details</button></span></td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Red Horse TVC 2019</td>
                  <td class="projDesc">Nagsimula sa patikim tikim, Pinilit kong gustuhin...</td>
                  <td><span>Manila</span></td>
                  <td>08-05-2017</td> 
                  <td>12-12-2017</td>
                  <td><span class="label label-success">Completed</span></td>
                  <td><span><button type="button" class="btn btn-black">Details</button></span></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Met Tathione</td>
                  <td class="projDesc">is used to help treat blood disorder asdfasdfjhasfdgasgfasgdfgkasdgfyugsdyfgauyegrashzgfusdfg...</td>
                  <td><span>Makati City</span></td>
                  <td>01-25-2015</td> 
                  <td>12-12-2017</td>
                  <td><span class="label label-warning">On-Going</span></td>
                  <td><span><button type="button" class="btn btn-black">Details</button></span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
  </div>
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