<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
	  <!-- Sidebar user panel -->
	  <div class="user-panel">
	    <div class="pull-left image">
	      <img src="@if (isset(Auth::user()->username)){{Auth::user()->displayPicture}} @endif" class="img-circle" alt="User Image">
	    </div>
	    <div class="pull-left info">
	      <p>@if (isset(Auth::user()->username))
	      		{{Auth::user()->username}}
	      	
	       @endif</p>
	      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	    </div>
	  </div>
	  
	  <!-- sidebar menu: : style can be found in sidebar.less -->
	  <ul class="sidebar-menu" data-widget="tree">
	    <li class="header">MAIN NAVIGATION</li>
	    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
	      <a href="/dashboard">
	        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
	        
	      </a>
	    </li>
	    <li class="treeview {{ Request::is('talent-application-pending') ? 'active' : '' }} {{ Request::is('talent-application-audition') ? 'active' : '' }}">
	      <a href="#">
	        <i class="fa fa-files-o"></i>
	        <span>Talent Applications</span>
	        <span class="pull-right-container">
	          <span class="label label-success pull-right">new</span>
	        </span>
	      </a>
	      <ul class="treeview-menu">
	        <li class="{{ Request::is('talent-application-pending') ? 'active' : '' }}">
	        	<a href="/talent-application-pending"><i class="fa fa-circle-o"></i>Pending Applications</a>
	        </li>
	        <li class="{{ Request::is('talent-application-audition') ? 'active' : '' }}">
	        	<a href="/talent-application-audition"><i class="fa fa-circle-o"></i>List of Audition</a>
	        </li>
	      </ul>
	    </li>
	    <li class="{{ Request::is('talent-request') ? 'active' : '' }}">
	      <a href="/talent-request">
	        <i class="fa fa-paper-plane-o"></i> <span>Talent Requests</span>
	        <span class="pull-right-container">
	          <small class="label pull-right bg-green">new</small>
	        </span>
	      </a>
	    </li>
	    
	     <li class="treeview {{ Request::is('deployment-kids') ? 'active' : '' }} {{ Request::is('deployment-teens') ? 'active' : '' }} {{ Request::is('deployment-adults') ? 'active' : '' }}">
	      <a href="#">
	        <i class="fa fa-users"></i>
	        <span>Talent Deployments</span>
	      </a>
	      <ul class="treeview-menu">
	        <li class="{{ Request::is('deployment-kids') ? 'active' : '' }}"><a href="/deployment-kids"><i class="fa fa-circle-o"></i>Kids</a></li>
	        <li class="{{ Request::is('deployment-teens') ? 'active' : '' }}"><a href="/deployment-teens"><i class="fa fa-circle-o"></i>Teens</a></li>
	        <li class="{{ Request::is('deployment-adults') ? 'active' : '' }}"><a href="/deployment-adults"><i class="fa fa-circle-o"></i>Adults</a></li>
	      </ul>
	    </li>
	    <li class="{{ Request::is('talent-schedules') ? 'active' : '' }}">
	      <a href="/talent-schedules">
	        <i class="fa fa-calendar"></i> <span>Schedules</span>
	        <span class="pull-right-container">
	          <small class="label pull-right bg-green">new</small>
	        </span>
	      </a>
	    </li>

	    <li class="header">MAINTENANCE</li>
	    <li class="{{ Request::is('setcards') ? 'active' : '' }}">
	      <a href="/setcards">
	        <i class="fa  fa-file-image-o"></i> <span>Set Cards</span>
	      </a>
	    </li>
	    <li class="{{ Request::is('users-maintenance') ? 'active' : '' }}">
	      <a href="{{ route('accounts.index') }}">
	        <i class="fa  fa-user"></i> <span>Users</span>
	      </a>
	    </li>
	    <li class="{{ Request::is('talent-maintenance') ? 'active' : '' }}">
	      <a href="/talent-maintenance">
	        <i class="fa  fa-gear"></i> <span>Talents</span>
	      </a>
	    </li>
		
	  </ul>
	</section>
	<!-- /.sidebar -->
</aside>