<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>
  <body class="@yield('bodyClass')">
    <div class="@yield('divClass')">

      @include('partials._navigation')
      <section class="content-wrapper">
        <div class="content">
          <div class="navbar navbar-default">
                <div class="justify-content-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="@yield('viewAll')"><b>View All</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="@yield('viewAvailable')">Available</a>
                        </li>
                      <li class="nav-item">
                            <a class="nav-link" href="@yield('viewNotAvailable')">Not Available</a>
                        </li>
                    </ul>
                  </div>
              </div>
            <br>
            <section class="container">
              <div class="row">
                <div class="col-md-4">
                    <div>
                      <center><img src="@yield('talentImgSrc')" width="70%">
                        <p class="talentName">@yield('name')</p></center>
                    </div>
                </div>
              </div>
            </section>
          </div>
      </section>
      <!-- Footer --> 
      @yield('footer')
    </div>

    <!-- jQuery 3 -->
    @yield('js')

  </body>
</html>
