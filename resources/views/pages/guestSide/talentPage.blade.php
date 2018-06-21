<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>
  <body>
   
    @include('partials._navbarGuestDark')
    <div class="row">
      <section class="@yield('female')">
        <div class="container" id="kids-inner">
          <div class="kids-content">
            <br>
            <br>
            <div class="buttonEme">
              <div class="innerButton">
                <br>
                <a class="choiceLink" href="@yield('femaleHref')"><h2 style="font-family: Montserrat Regular !important;">@yield('femaleLink')</h2></a>
                <br>  
              </div>
            </div>
          </div>
          
        </div>
        
      </section>

      <section class="@yield('male')">
        <div class="container" id="kids-inner">
          <div class="kids-content">
            <br>
            <br>
            <div class="buttonEme">
              <br>
              <a class="choiceLink" href="@yield('maleHref')"><h2 style="font-family: Montserrat Regular !important;">@yield('maleLink')</h2></a>
              <br>
            </div>
          </div>
          
        </div>
        
      </section>

      @yield('footer')
    </div>
      

    <!-- Footer -->
    

    <!-- jQuery 3 -->
    @include('partials._script')

  </body>
</html>
