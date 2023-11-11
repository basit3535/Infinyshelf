<div id="wrapper">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('uploads/' . Auth::user()->thumbnail) }}" alt="user-image"
                        class="rounded-circle img-fluid">
                    <span class="pro-user-name ml-1">
                        {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title text-center">
                        <h4 class="text-overflow m-0">Welcome !!</h6>
                    </div>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    {{-- <a href="{{ route('profile.index') }}" class="dropdown-item notify-item">
                        <i class="fa fa-id-card"></i>
                        <span>Profile</span>
                    </a> --}}

                    <a href="{{ url('/') }}" class="dropdown-item notify-item">
                        <i class="fe-home"></i>
                        <span>Back To Home</span>
                    </a>

                    <a href="{{ url('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                     <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ url('/dashboard') }}" class="logo text-center mt-2">
                <span class="logo">
                        <img src="{{ asset('images/infinyshelf_logo.png') }}" alt="ERP LOGO" class="company-logo"
                            style="width: 100%;max-width:100px;">
                </span>
            </a>

        </div>

        {{-- <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile disable-btn waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>

            <li>
                <h4 class="page-title-main">
                    Dashboard
                </h4>

             <h4 class="page-title-main">InfinyShelf {{ Auth::user()->name }} Dashboard
                 </h4>

            </li>
        </ul> --}}
    </div>
