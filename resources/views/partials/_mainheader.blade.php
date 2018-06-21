<header class="main-header">
    <a href="home.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-family: Henri Didot !important"><b>M</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-family: Henri Didot !important"><b>Miss</b>Di Models</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="@if (isset(Auth::user()->username)) {{ Auth::user()->displayPicture }} @endif" class="user-image" alt="User Image">
              <span class="hidden-xs">@if (isset(Auth::user()->username))
            {{Auth::user()->username}}@endif</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src=" @if (isset(Auth::user()->username)) {{ Auth::user()->displayPicture }} @endif" class="img-circle" alt="User Image">
                <p>
                  @if (isset(Auth::user()->username))
                    {{Auth::user()->username}}
                  
                  @endif
                  <small>Member since 
                    @if (isset(Auth::user()->username))
                     {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('F j, Y')}}

                    @endif
                  </small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href=" @if(auth()->user()->accountType == '1') /dashboard 
                            @elseif(auth()->user()->accountType == '2') /CUserprofile
                            @elseif(auth()->user()->accountType == '3') /userprofile
                            @endif" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form method="POST" action="{{ route('logout') }}">
                    {{ csrf_field() }}
                    <input type="submit"  class="btn btn-default btn-flat" value="Sign out" />
                    
                  </form>
                  
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>