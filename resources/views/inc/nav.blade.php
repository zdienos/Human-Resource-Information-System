<!-- NAV TOP  -->
<nav class="navbar navbar-default top-navbar" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><strong><i class="icon fa fa-user"></i> HR System</strong></a>
        
        <div id="sideNav" href="">
        <i class="fa fa-bars icon"></i> 
        </div>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="/profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>

</nav>
<!--/. NAV TOP  -->
<!-- NAV SIDE  -->
<nav class="navbar-side" role="navigation">
    <div class="sidebar-collapse">
        
        <ul class="nav" id="main-menu">
            <li>
                    <a><img id="profile-img" src="{{URL::asset('/img/ss.jpg')}}" alt="profile Pic" height="50" width="50" style="margin:0px 10px 0px 10px; border-radius:50%; border: 3px solid rgb(56, 98, 187);">
                        Welcome David
                    </a>  
            </li>
            <li>
                <a class="{{ Request::is('/') ? 'active-menu' : null }}" href="/"><i class="fa fa-bullseye"></i> Dashboard</a>
            </li>
            <li> 
                <a class="{{ Request::is('new-employee/create') || Request::is('view-employees') ? 'active-menu' : null }}"><i class="fa fa-user"></i> Employee<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ Request::is('new-employee/create') ? 'active-menu' : null }}" href="/new-employee/create">Add New Employee</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('view-employees') ? 'active-menu' : null }}" href="/view-employees">View Employees</a>
                    </li>
                </ul>
            </li> 
                
            <li>
                <a class="{{ Request::is('attendance-log') || Request::is('upload-attendance') ? 'active-menu' : null }}"><i class="fa fa-clock"></i> Attendace<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ Request::is('attendance-log') ? 'active-menu' : null }}" href="/attendance-log">Attendance Log</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('upload-attendance') ? 'active-menu' : null }}" href="/upload-attendance">Upload Attendance</a>
                    </li>
                </ul>
             </li>	
                    
            <li>
                <a class="{{ Request::is('add-leave-type') || Request::is('leave-types') || Request::is('view-leaves') ? 'active-menu' : null }}">
                    <i class="fa fa-bed"></i> Leave<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ Request::is('add-leave-type') ? 'active-menu' : null }}" href="/add-leave-type">Add Leave Type</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('leave-types') ? 'active-menu' : null }}" href="/leave-types">Leave Types</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('view-leaves') ? 'active-menu' : null }}" href="/view-leaves">View Leaves</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a class="{{ Request::is('new-campus') || Request::is('view-campus') ? 'active-menu' : null }}">
                    <i class="fa fa-campground"></i> Campus<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ Request::is('new-campus') ? 'active-menu' : null }}" href="/new-campus">New Campus</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('view-campus') ? 'active-menu' : null }}" href="/view-campus">View Campus</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="{{ Request::is('add-department') || Request::is('departments') ? 'active-menu' : null }}">
                    <i class="fa fa-building"></i> Department <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ Request::is('add-department') ? 'active-menu' : null }}" href="/add-department">Add Department</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('departments') ? 'active-menu' : null }}" href="/departments">View Department</a>
                    </li>
                </ul>
            </li>


            <li>
                <a class="{{ Request::is('attendance-report') || Request::is('leave-report') ? 'active-menu' : null }}">
                    <i class="fa fa-chart-bar"></i> Reports<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ Request::is('attendance-report') ? 'active-menu' : null }}" href="/attendance-report">Attendance Report</a>
                    </li>
                    <li>
                        <a class="{{ Request::is('leave-report') ? 'active-menu' : null }}" href="/leave-report">Leave Report</a>
                    </li>
                </ul>
            </li>
            <li>
                    @include('inc.messages') 
            </li>
        </ul>
    </div>

</nav>
<!-- /. NAV SIDE  -->
