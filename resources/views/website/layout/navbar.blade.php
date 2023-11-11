<header class="cs-site_header cs-style1 cs-sticky-header cs-primary_color cs-white_bg">
    <div class="cs-main_header">
        <div class="container">
            <div class="cs-main_header_in">
                <div class="cs-main_header_left">
                    <a class="" href="{{ url('/') }}">
                        <img src="{{ asset('images\infinyshelf_logo.png') }}" alt="Logo"
                            style="width: 75% !important; max-width:160px !important;" />
                    </a>
                </div>
                <div class="cs-main_header_center">
                    <div class="cs-nav">
                        <ul class="cs-nav_list">
                            <li><a href="#home" class="cs-smoth_scroll">Home</a></li>

                            <li><a href="#about" class="cs-smoth_scroll">About</a></li>
                            <li>
                                <a href="#feature" class="cs-smoth_scroll">Feature</a>
                            </li>
                            <li>
                                <a href="#pricing" class="cs-smoth_scroll">Pricing</a>
                            </li>
                            <li>
                                <a href="#contact" class="cs-smoth_scroll">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cs-main_header_right">
                    @php
                        $user = auth()->user();
                    @endphp
                    @if (isset($user))
                        <div class="cs-toolbox">
                            {{-- <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                class="cs-btn cs-color1"><span>LogOut</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> --}}
                            <a href="{{ url('/dashboard') }}" class="cs-btn"><span>Dashboard</span></a>

                        </div>
                    @else
                        <div class="cs-toolbox">
                            <a href="{{ url('login/create') }}" class="cs-btn " style="background-color: #01B0B5"><span>Login</span></a>
                            <a href="{{ url('signup/create') }}" class="cs-btn"><span>Register</span></a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</header>
