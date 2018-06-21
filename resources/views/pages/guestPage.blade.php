<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')

  </head>
  <body @yield('bodyConfig')>
   
    @include('partials._navbarGuestDark')

    @yield('content')

    <!-- Footer -->
    @include('partials._footerGuest')

    <!-- jQuery 3 -->
    @include('partials._script')

  </body>
</html>
