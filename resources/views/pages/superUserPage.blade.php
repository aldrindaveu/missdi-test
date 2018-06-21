<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')

  </head>
  <body @yield('bodyConfig')>
   
    <center>
      <img  src="images/LOGO DARK.png" alt="logo">
    </center>

    @yield('content')

    <!-- Footer -->

    <!-- jQuery 3 -->
    @include('partials._script')

  </body>
</html>
