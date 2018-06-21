@if(null !==(auth('web')->user()))
	@if (auth()->user()->accountType == '1')
		<script> window.location="/dashboard";</script>
	@elseif (auth()->user()->accountType == '2')
		<script> window.location="/CUserprofile"</script>
	@elseif (auth()->user()->accountType == '3')
		<script> window.location="/userprofile"</script>
	@endif
@endif	

<nav class="navbar navbar-expand-xl navbar-dark fixed-top navbarBlack" role="navigation" >
	<div class="container" >
		<div>
			<div class="navbar-upper">
				<center>
					<a href="/">
				 		<img class="navbar-brand-image" id ="brand" src="images/LOGO DARK.png" alt="logo">
				 	</a>
				 </center>
			</div>
			<div class="collapse-nav">
				<div class="collapse navbar-collapse justify-content-center navbar-lower" id="navbarSupportedContent">
					<ul class="navbar-nav">
			    		<li class="nav-item navItem">
			    			<div class="{{ Request::is('/') ? 'active' : '' }}">
			    				<a class="nav-link" href="/">HOME</a>
			    			</div>
			    		</li>
			    		<li class="nav-item navItem">
			    			<div class="{{ Request::is('kids') ? 'active' : '' }} {{ Request::is('kids-boys') ? 'active' : '' }} {{ Request::is('kids-boysAvailable') ? 'active' : '' }} {{ Request::is('kids-boysNotAvailable') ? 'active' : '' }} {{ Request::is('kids-girlsAvailable') ? 'active' : '' }} {{ Request::is('kids-girlsNotAvailable') ? 'active' : '' }} {{ Request::is('kids-girls') ? 'active' : '' }}">
				        		<a class="nav-link" href="/kids">KIDS</a>
				        	</div>
			    		</li>
			    		<li class="nav-item navItem">
			    			<div class="{{ Request::is('teens') ? 'active' : '' }} {{ Request::is('teens-gents') ? 'active' : '' }} {{ Request::is('teens-gentsAvailable') ? 'active' : '' }} {{ Request::is('teens-gentsNotAvailable') ? 'active' : '' }} {{ Request::is('teens-ladiesAvailable') ? 'active' : '' }} {{ Request::is('teens-ladiesNotAvailable') ? 'active' : '' }} {{ Request::is('teens-ladies') ? 'active' : '' }}">
			        			<a class="nav-link" href="/teens">TEENS</a>
			        		</div>
			    		</li>
			    		<li class="nav-item navItem">
			    			<div class="{{ Request::is('adults') ? 'active' : '' }} {{ Request::is('adults-Man') ? 'active' : '' }} {{ Request::is('adults-ManAvailable') ? 'active' : '' }} {{ Request::is('adults-ManNotAvailable') ? 'active' : '' }} {{ Request::is('adults-WomanAvailable') ? 'active' : '' }} {{ Request::is('adults-WomanNotAvailable') ? 'active' : '' }} {{ Request::is('adults-Woman') ? 'active' : '' }}">
			        			<a class="nav-link" href="/adults">ADULTS</a>
			        		</div>
			    		</li>
			    		<li class="nav-item " id="joinUsLink" >
			        		<a class="nav-link navLink" href="/joinus">JOIN US!</a>
			    		</li>
			    		<li class="nav-item ">
			    				<a class="nav-link navLink" href="/login">LOGIN</a>
			    		</li>
			    	</ul>
				</div>
			  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</div>
</nav>