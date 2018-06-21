<!DOCTYPE html>
<html>
<head>
	<title>Error @yield('title')</title>
	<style type="text/css">
	@font-face {
	    font-family: Raleway Bold;
	    src: url("fonts/Raleway-Bold.ttf") format("opentype");
	}
	@font-face {
	    font-family: Montserrat SemiBold;
	    src: url("fonts/Montserrat-SemiBold.ttf") format("opentype");
	}
	@font-face {
	    font-family: Questrial Regular;
	    src: url("fonts/Questrial-Regular.ttf") format("opentype");
	}
	@font-face {
	    font-family: Opensans Light;
	    src: url("fonts/OpenSans-Light.ttf") format("opentype");
	}
	@font-face {
	    font-family: Montserrat Regular;
	    src: url("fonts/Montserrat-Regular.ttf") format("opentype");
	}
	@font-face {
	    font-family: Montserrat Light;
	    src: url("fonts/Montserrat-Light.ttf") format("opentype");
	}
		body{
			height: 100vh;
			width: 100vw;
			background-color: #000;
			color: white;
		}
		#errorTitle{
			font-family: 'Montserrat Light';
			font-size: 90px;
		}
		#errorMessage{
			font-family: 'Opensans Light';
			font-size: 30px;
		}
	</style>
</head>
<body>
	<br><br><br><br>
	<center>
		<p id="errorTitle">@yield('errorTitle')</p>
		<p id="errorMessage">@yield('errorMessage')</p>

	</center>
</body>
</html>