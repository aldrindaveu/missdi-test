<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')

  </head>
  <body>
    
    @include('partials._navbarGuestDarkReset')

    @yield('content')

    <!-- Footer -->
    @include('partials._footerGuestReset')

    <!-- jQuery 3 -->
    @include('partials._script')

  </body>
</html>
l