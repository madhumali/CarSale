<header id="header" class="clearfix">
    <nav class="navbar navbar-default">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-inline">
                            <li><span><i class="fa fa-envelope-o"></i></span> <a href="mailto:rpncarsale@gmail.com">rpncarsale@gmail.com</a></li>
                            <li>
                                <ul class="list-inline top-social">
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="user-section">
                            <ul class="list-line">
                                @guest
                                    {{-- <li>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"><i class="fa fa-user" aria-hidden="true"></i>{{ __('Register') }}</a>
                                        @endif
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('login') }}" class=" btn btn-primary" aria-hidden="true">{{ __('Login') }}</a>
                                    </li>
                                @else
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-xs btn-success dropdown-toggle" type="button" data-toggle="dropdown">{{ Auth::user()->name }}
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        <li><a style="color:green;" href="/admin">Dashboard</a></li>
                                        </ul>
                                    </div>
                                </li>
                                @endguest
                                <li>
                                    <div class="search-container">
                                        <form action="{{ route('search') }}">
                                            <input type="text" placeholder="Search.." name="keyword">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- user-section -->
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar -->

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="RPN Car Sales"></a>
            </div>
            <!-- /navbar-header -->

            <div class="navbar-right">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('main')}}">Home</a></li>
                        <li><a href="{{ route('recent') }}">New Arrivals</a></li>
                        <li><a href="/testrides" >Test Rides</a></li>
                        <li><a href="#inventory">Inventory</a></li>
                        <li><a href="/contact">Contact Us</a></li>
            </div><!-- /navbar-header -->
        </div>
        <!-- container -->
    </nav>
    <!-- navbar -->
</header>
<!-- header -->