<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>
  <body class="@yield('bodyClass')">
    
    <div class="@yield('divClass')">

      @include('partials._navigation')
  
      @yield('content')

      <!-- Footer -->
      @yield('footer')

    </div>

    <!-- jQuery 3 -->
    @include('partials._script')

  </body>
</html>
