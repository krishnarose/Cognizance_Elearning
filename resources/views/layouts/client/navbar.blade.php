<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="{{ url('/') }}"><img
                                        src="{{ asset('client/images/logo.png') }}" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li class="active"> <a href="{{ url('/') }}">Home</a> </li>
                                    <li> <a href="about.html">About us</a> </li>
                                    <li><a href="books.html">Our Books</a></li>
                                    @if (Auth::user())
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Registration</a></li>
                                    @endif

                                    <li class="mean-last"> <a href="#"><img
                                                src="{{ asset('client/images/search_icon.png') }}" alt="#" /></a>
                                    </li>
                                    <li class="mean-last"> <a href="#"><img
                                                src="{{ asset('client/images/top-icon.png') }}" alt="#" /></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end header inner -->
</header>
