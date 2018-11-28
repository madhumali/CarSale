<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Theme Region">
        <meta name="description" content="">

        <title>RPN</title>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.css') }}">  
        <link rel="stylesheet" href="{{ asset('main/css/main.css') }}">  
        <link rel="stylesheet" href="{{ asset('main/css/responsive.css') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- font -->
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>

        <!-- favicon icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/ico/favicon.ico') }}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </head>

    <body>
 
    <header id="header" class="clearfix">
            <nav class="navbar navbar-default">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-inline">
                                    <li><span><i class="fa fa-envelope-o"></i></span> <a href="mailto:rpncarsale@gmail.com">rpncarsale@gmail.com</a></li>
                                    <li><ul class="list-inline top-social">
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
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                                
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div><!-- user-section -->
                            </div>
                        </div>
                    </div>
                </div><!-- topbar -->
        
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">RPN Car Sale</a>
                    </div><!-- /navbar-header -->
                    
                    <div class="navbar-right">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="/testrides" >Test Rides</a></li>
                                <li><a href="">Inventory</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- container -->
            </nav><!-- navbar -->
        </header><!-- header -->

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="container">
                <h1>Add a Testride</h1>
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'testrides.add', 'method' =>'POST', 'files'=> 'true'))!!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                @elseif(Session::has('warnning'))
                                    <div class="alert alert-danger">{{Session::get('warnning')}}</div>
                                    
                                @endif
                            </div>
    
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    {!!Form::label('name','Name:')!!}
                                    <div class="">
                                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                        
                                        {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    {!! Form::label('start_date', 'Date:') !!}
                                    <div class="">
                                        {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    {!! Form::label('email', 'EMail:') !!}
                                    <div class="">
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('email', '<p class"alert alert-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
    
                            <br>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <div class="form-group">
                                    {!! Form::label('telephone', 'Telephone:') !!}
                                    <div class="">
                                        {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                                        {!! $errors->first('telephone', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                            </div>
    
                            
    
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <hr>
    
        <div class="container">
            <div class="panel panel-default">
                <h1>Scheduled Testrides </h1>
                <div class="panel-body">
                        {!! $calendar_details->calendar() !!}
                </div>
            </div>
        </div>
    


    <footer id="footer">
            <div class="footer-top section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footer-widget about-widget">
                                <h3>About US</h3>
                                <p>As RPN car sale we Import and sell almost evry brand of cars and we hope to provide best service to our customers.</p>
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-widget link-widget">
                                <h3>Useful Links</h3>
                                <ul>
                                    <li><a href="#"> <i class="fa fa-angle-double-right"></i> Testrides</a></li>
                                    <li><a href="#"> <i class="fa fa-angle-double-right"></i> Inventory</a></li>
                                    <li><a href="#"> <i class="fa fa-angle-double-right"></i> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="footer-widget contact-widget">
                                <h3>Get in Touch</h3>
                                <ul>
                                        <li><span><i class="fa fa-envelope"></i> E-mail :</span> <a href="mailto:#">rpncarsales@gmail.com</a></li>
                                        <li>
                                            <ul class="list-inline social">
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a></li>
                                            <li><a class="google" href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- container -->
            </div><!-- footer-top -->
        </footer><!-- footer -->
        
        <script src="{{ asset('main/js/jquery.min.js') }}"></script>
        <script src="{{ asset('main/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>
        {{-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script> --}}
        <script src="{{ asset('main/js/gmaps.min.js') }}"></script>
        <script src="{{ asset('main/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('main/js/custom.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

        {!! $calendar_details->script() !!}

    </body>
</html>