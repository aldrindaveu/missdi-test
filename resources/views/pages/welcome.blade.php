@extends('main')

@section('title', 'Home')

@section('css')
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap4/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/guest.css') }}">
	<script src="{{ URL::asset('js/scrollreveal.js') }}"></script>
@endsection

@section('navbar')
	@include('partials._navbarGuest')
@endsection

@section('content')
	<section id="stickyBG1" class="stickyBG">
		<div class="inner">
			<div class="copy" id="stickyCaption">
				<br>
				<br><br><br><br><br><br><br>
				<center><hr style="width:35%; border-color: white;text-align: center; position: relative;"></center>
				<h1>MissDi </h1>
				<center><hr style="width:35%; border-color: white;text-align: center; position: relative;"></center>
				<br>
				<p class="subhead">Model and Talent <br> <br> Management</p>
			</div>
			<a href="#content" class="expand"> <img src="images/expand-white.png" width="50px"></a>
		</div>
	</section>

	<section class="content" id="content" style="padding-top: 135px;">
		  <div class="inner2">
		    <div class="copy copy2">
		    <center><h3 style="font-family: Montserrat Semibold !important; text-align: center !important; align-items: center !important">Our Mission</h3></center>
		   
		    <br>
		    <div class="container">
		    	
		    	<div class="container">
		    		<div class="row" style="display:block; text-align: center; align-items: center;">
						<p style="font-size: 23px; font-family: Opensans Light; line-height: 1.5; ">MissDi Model and Talent Management produces competitive and well-versed Models and Talents <br>that will be marketable in the changing needs of the <br>Entertainment and Advertising Industry.</p>
						
					</div>
					<hr>
					<br>
					<center><h3 style="font-family: Montserrat Semibold !important; text-align: center !important; align-items: center !important">The Company</h3></center>
					<div class="row">
						
						<p style="font-size: 23px; font-family: Opensans Light; line-height: 1.5; ">MISSDI Model and Talent Management aims to be the next household name in the Industry as the top producer of highly trained quality models and talents. 
						MISSDI offers training and workshops to aspiring models and Talents as they start and grow their career in the Modeling, Advertising and Entertainment Industry.
						A member of TAO (Talent Agency Organization). </p>
					</div>
				
				
			</div>
			<br><br><br>
			<hr>
			<br>	
			<center><h3 style="font-family: Montserrat Semibold !important; text-align: center !important; align-items: center !important">Owner's and Key Contributors' Profile</h3></center>
			<br>	
			<hr>	
			<br>	
		    	<div class="row" id="missDiContent">
			    	<div class="col-md-6">
			    		<img class="dp-circle" src="images/missdi2.jpg" width="350px">
			    	</div>
			    	<div class="col-md-6">
			    		
			    		<h4 class="desc" style="font-family: Montserrat Regular !important; ">Miss Di Marasigan (Owner/President)</h4>
			    		<p style="font-size: 20px; font-family: Opensans Light; line-height: 1.5; text-align: justify;">
			    		Learn from a Model herself, MissDi is a local and International Model who walked the runway for Famous Designers and Clothing Brands. She started at a young age and now her passion is to motivate new generation of aspiring models to reach their dreams. She mentored kids and teens who are now professional Models. As a known International and Celebrity Model Coach, she will teach you how to confidently walk the runway and pose in front of a camera.</p>
			    	</div>
			    </div>
		    </div>
			<br>
		    
		    <div class="container">
		    	<hr>
		    	<br>
		    <div class="row" id="missDiContent">

		    	<div class="col-md-6">
		    		
		    		<h4 class="desc" style="font-family: Montserrat Regular !important;">Roly Halagao (Casting Director)</h4>
		    		<p style="font-size: 20px; font-family: Opensans Light; line-height: 1.5; text-align: justify;">
		    		
					We don't only teach you how to walk or how to pose - We teach you how to be a professional Model and how to be a Star! 
					Casting Director Roly Halagao worked with multiple Professionals and Celebrities in the Fashion, Advertising and Entertainment Industry. He will help you discover the Best in you and be Star! </p>
		    	</div>
		    	<div class="col-md-6">
		    		<img class="dp-circle" src="images/roly.jpg"  width="350px">
		    	</div>
		    	
		    </div>
		    </div>
		    <br>
		    
			<div class="container">
				<hr>
		    	<br>
		    <div class="row" id="missDiContent">
		    	<div class="col-md-6">
		    		<img class="dp-circle" src="images/lynnbentsen.jpg" width="350px">
		    	</div>
		    	<div class="col-md-6">
		    		<br>
		    		<h4 class="desc" style="font-family: Montserrat Regular !important;">Lynn Bentsen (Investor)</h4>
		    		<p style="font-size: 20px; font-family: Opensans Light; line-height: 1.5; text-align: justify;">
		    		Graduated from University of Nueva Caceres – BS Commerce. 20 years in Fashion Industry doing Ramp, TVC and Print Modeling.  She ramped for Philippines Fashion week and a Bodyshot Finalist. </p>
		    	</div>
		    </div>
		    </div>
		    <br>
		    
			<div class="container">
				<hr>
		    <br>
		    <div class="row" id="missDiContent">
		    	<div class="col-md-6">
		    		<br>
		    		<h4 class="desc" style="font-family: Montserrat Regular !important;">Russell Hagape (Managing Director)</h4>
		    		<p style="font-size: 20px; font-family: Opensans Light; line-height: 1.5; text-align: justify;">
		    		Worked in the Business Process Outsourced Industry for 15 years.  An Operations Manager for a Top BPO Company for 6 years and a Business Analyst for American Express Global Partner Network.  She’s also a photographer/videographer for TCMI Fashion Academy. </p>
		    	</div>
		    	<div class="col-md-6">
		    		<img src="images/russel.jpg" width="350px" alt="Russel Hagape">
		    	</div>
		    	
		    </div>
		    </div>
		    <br>
		  <br>
			
		  </div>
		  
		</section>
		<br>
		<br><br><br>
		<br>
		<br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br>

@endsection

@section('footer')
	@include('partials._welcomeFooter')
@endsection

@section('js')
<script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
<script src= "{{ URL::asset('js/bootstrap4.js') }}" type="text/javascript"></script>
<script>
    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
</script>
<script>
	$(function () {
		$(document).scroll(function () {
	    	var $nav = $('.navbar');
			$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	 	});
	});
</script>
<script>

	window.sr = ScrollReveal();


	sr.reveal('#stickyCaption', {
		duration: 2000, 
		});

</script>

@endsection

