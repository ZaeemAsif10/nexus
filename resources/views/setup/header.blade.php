<!-- Header -->
<div class="header">

    <div class="header-left">
        <a href="{{ url('admin') }}" class="logo">
            <div class="page-title-box">
                <h3>NEXUS</h3>

            </div>

        </a>
    </div>
    <!-- /Logo -->
    <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>


    <!-- /Header Title -->
    <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
    <!-- Header Menu -->
    <ul class="nav user-menu">

        <!-- /Flag -->
        <!-- Notifications -->
        <li class="nav-item dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <i class="fa fa-bell"></i> <span class="badge badge-danger"></span>
            </a>

            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>

                <div class="noti-content">
                    <ul class="notification-list" id="notifyTable">

                    </ul>
                </div>


                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li>
        <!-- /Notifications -->


        <li class="nav-item dropdown">
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Messages</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>

                <div class="noti-content">
                    <ul class="notification-list" id="messageTable">

                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Messages</a>
                </div>
            </div>
        </li>
        <!-- /Message Notifications -->
        <!-- Message Notifications -->
        <!-- /Message Notifications -->
        <li class="nav-item dropdown has-arrow main-drop">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                @if (auth()->user() != null)
                <span class="user-img mr-2"><i class="fa fa-user" aria-hidden="true"></i>
                    {{-- <span class="status online"></span> --}}
                </span>
                    @else
                    <span class="user-img mr-2"><i class="fa fa-user" aria-hidden="true"></i>
                        {{-- <span class="status online"></span> --}}
                    </span>
                @endif
                <span>
                    @if (auth())
                        {{ auth()->user()->name }}
                    @endif
                </span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
            </div>
        </li>
    </ul>
    <!-- /Header Menu -->
    <!-- Mobile Menu -->
    <div class="dropdown mobile-user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
        </div>
    </div>
    <!-- /Mobile Menu -->
</div>
