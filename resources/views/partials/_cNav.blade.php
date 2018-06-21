<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="@if (isset(Auth::user()->username)){{Auth::user()->displayPicture}} @endif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>@if (isset(Auth::user()->username)) {{Auth::user()->username}} @endif </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Request::is('CUserprofile') ? 'active' : '' }}">
          <a href="/CUserprofile">
            <i class="fa fa-user"></i> <span>User Profile</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="{{ Request::is('talentRequest') ? 'active' : '' }}">
          <a href="/talentRequest">
            <i class="fa fa-paper-plane-o"></i>
            <span>Talent Request</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li class="{{ Request::is('bookings') ? 'active' : '' }}">
          <a href="/bookings">
            <i class="fa fa-tasks"></i> <span>Bookings</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview {{ Request::is('viewTalentKids') ? 'active' : '' }} {{ Request::is('viewTalentTeens') ? 'active' : '' }} {{ Request::is('viewTalentAdults') ? 'active' : '' }}">
          <a href="#">
            <i class="fa fa-users"></i> <span>View Talents</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('viewTalentKids') ? 'active' : '' }}"><a href="/viewTalentKids"><i class="fa fa-circle-o"></i>Kids</a></li>
            <li class="{{ Request::is('viewTalentTeens') ? 'active' : '' }}"><a href="/viewTalentTeens"><i class="fa fa-circle-o"></i>Teens</a></li>
            <li class="{{ Request::is('viewTalentAdults') ? 'active' : '' }}"><a href="/viewTalentAdults"><i class="fa fa-circle-o"></i>Adults</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>