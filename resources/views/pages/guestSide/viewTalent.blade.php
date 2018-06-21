<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>
  <body>
   
    @include('partials._navbarGuestDark')
    <section class="kids-girls-content container">
      <div class="navbar navbar-dark bg-dark navbar-expand-xl" style="border-radius: 5px;">
        <div class="justify-content-center">
          <ul class="navbar-nav">
              <li class="nav-item">
                <div class="active">
                  <a class="nav-link" href="@yield('viewAll')"><b>View All</b></a>
                </div>
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
    </section>
    <br>
    <section class="container">
     <div class="talentGallery">
      <div class="">
        <div class="col-xs-3">
          <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
            <div class="flipper">
              <div class="front">
                <div class="talentItem">
                  <div class="talentBody">
                      <img src="@yield('talentImgSrc')" alt="Head Shot Pic" width="200px">
                      <div class="talentNameDiv"><p class="talentNameText">@yield('name')</p></div>
                  </div>
                </div>
              </div>
              <div class="back">
                <div class="talentItem">
                  <div class="talentBody">
                    <br>
                    <hr style="border-top:1px solid #999">
                   
                      <p class="talentNameText">@yield('name')</p>
                      <hr style="border-top:1px solid #999">
                      <h5 style="font-size: 14px;">@yield('address') | 9 years old</h5>
                      <br>
                      <br>
                      <a class="btn btn-black" role="button" href="/login">Login to View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       <!-- /.flip-container-->
        </div>

      </div>
    </div>
    </section>

    <!-- Footer -->
    @include('partials._footerGuest')

    <!-- jQuery 3 -->
    @include('partials._script')

  </body>
</html>
