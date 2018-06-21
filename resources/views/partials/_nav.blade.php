<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="@if (isset(Auth::user()->username)) {{Auth::user()->displayPicture}} @endif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>@if (isset(Auth::user()->username)) {{Auth::user()->username}} @endif</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class= "{{ Request::is('userprofile') ? 'active' : '' }}">
          <a href="/userprofile">
            <i class="fa fa-user"></i> <span>User Profile</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class= "{{ Request::is('schedule') ? 'active' : '' }}">
          <a href="/schedule">
            <i class="fa fa-paper-plane-o"></i>
            <span>  Schedule</span>
            <span class="pull-right-container"></span>
          </a>
        </li>
        <li class= "{{ Request::is('projects') ? 'active' : '' }}">
          <a href="/projects">
            <i class="fa fa-tasks"></i> <span>Projects</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class= "{{ Request::is('rating') ? 'active' : '' }}">
          <a href="/rating">
            <i class="fa fa-star-o"></i> <span>Rating</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
      
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>