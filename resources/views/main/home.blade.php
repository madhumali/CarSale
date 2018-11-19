@extends('main/app')
@section('title','RPNcarsale-Homepage')
@section('content')

<div class="home-page">

    <div id="home-section" class="parallax-section carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image:url(images/backgrounds/back1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h2 data-animation="animated lightSpeedIn">Best Cars</h2>
                                <p data-animation="animated lightSpeedIn">Our team always try to serve you better vehicle on your suite..</p>
                                <div class="ad-btn">
                                    <a href="#" class="btn btn-primary" data-animation="animated lightSpeedIn">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- contaioner -->
            </div><!-- item -->

            <div class="item" style="background-image:url(images/backgrounds/back2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h2 data-animation="animated lightSpeedIn">Get the TruePrice</h2>
                                <p data-animation="animated lightSpeedIn">Pay Actual Price You Will Pay at the Dealership</p>
                                <div class="ad-btn">
                                    <a href="#" class="btn btn-primary" data-animation="animated lightSpeedIn">Refer Now</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- contaioner -->
            </div><!-- item -->
            <div class="item" style="background-image:url(images/backgrounds/back3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="slider-content">
                                <h2 data-animation="animated lightSpeedIn">Excellent Service</h2>
                                <p data-animation="animated lightSpeedIn">Customer satisfaction is our main responsibility.....</p>
                                <div class="ad-btn" >
                                    <a href="#" class="btn btn-primary" data-animation="animated lightSpeedIn">View Ads</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- contaioner -->
            </div><!-- item -->
        </div>
        <a class="left carousel-control" href="#home-section" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
            <a class="right carousel-control" href="#home-section" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- #home-section -->
                    
    <!-- avt-category -->
    <div id="avt-category" class="clearfix">
        <div class="container">
            <div class="section services">
                <div class="col-md-12 featured-title">
                    <h2>Our Categories</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/hatchback.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">HatchBack</a> </h5>
                            <ul>
                                <li><a href="#">A hatchback is a car type with a rear door that opens upwards. They typically feature a four-door configuration, excluding the rear door. However, two-door hatchbacks are not uncommon.</a></li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/sedan.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">Sedan</a> </h5>
                            <ul>
                                <li>Out of the different types of cars, a sedan (US) or a saloon (UK) is traditionally defined as a car with four doors and a typical boot/ trunk. A slightly technical detail is that it usually features a 3-box configuration with each of the boxes categorically used for the engine, passenger, and cargo.</li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/mpv.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">MPV</a> </h5>
                            <ul>
                                <li>A multi-purpose vehicle (MPV) or multi-utility vehicle (MUV) are commonly known as 'people carriers'. They are designed to offer enhanced space and comfort for passengers with two or three rows of seating and large doors. The third row on MPVs/ MUVs can generally be reconfigured.</li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/suv.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">SUV</a> </h5>
                            <ul>
                                <li><a href="#">Conventionally, a sports utility vehicle (SUV) is a big car built on a body-on-frame chassis, sports increased ground clearance and offers off-roading capabilities to a certain extent. With that said, the aforementioned definition of an SUV has blurred over time and often includes both off-roaders and soft-roaders</a></li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/crossover.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">Crossover</a> </h5>
                            <ul>
                                <li>A simple, and common, definition of a crossover would be that it is a vehicle that combines the features of an SUV and a hatchback. Crossover vehicles offer soft-roading capabilities and are constructed like a car.</li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/coupe.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">Coupe</a> </h5>
                            <ul>
                                <li>A coupe is classically defined as a closed two-door car with a fixed roof. Considered sporty by nature, it generally gets just 2 seats or with a smaller-than-average rear. </li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/convertible.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">Convertible</a> </h5>
                            <ul>
                                <li>A convertible, a.k.a. a cabriolet or roadster, is a car with a roof structure that can be 'converted' to allow open-air or enclosed driving. They feature either a retractable hardtop roof or soft folding top.</li>
                            </ul>
                        </div><!-- category-avt -->		
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="category-avt">
                            <div class="category-icon">
                                <a href="#"><img src="images/categories/sports.jpg" alt="images" class="img-responsive"></a>
                            </div>
                            <h5><a href="#">Sports</a> </h5>
                            <ul>
                                <li>A sports car, or sportscar, is a small, usually two-seater automobile designed for spirited performance and nimble handling</li>
                            </ul>
                        </div><!-- category-avt -->	
                    </div>
                </div>
            </div><!-- services -->	
        </div><!-- container -->
    </div><!-- category-avt -->

    <div id="call-to-act" style="color: orange !important;">
        <div class="container">
            <div class="call-to-act">
                <h1><span>Import Your Dream car</span> With RPN Car Sales</h1>
                <p>Import Of Foreign Cars Become Easier Now: </p>
                <a href="#" class="btn btn-primary">Contact Now</a>
            </div>
        </div>
    </div><!-- #call-to-act -->

    <div class="section">
        <div class="container">
            <div class="section-title">
                <div class="title-content">
                    <h2>Advertisements on RPN Car Sale</h2>
                </div>
            </div>
            <div class="category-adds">
                <div id="category-tab">
                    <div class="tab-view">
                        <ul class="list-inline">
                            <li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                            <li class="small-view-tab"><i class="fa fa-th" aria-hidden="true"></i></li>
                            <li class="list-view-tab active"><i class="fa fa-th-list" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                    <div class="category-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li>
                            <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
                        </ul>
                        <div class="tab-content list-view-tab">
                            <div role="tabpanel" class="tab-pane active" id="popular">
                                <ul>
                                    @foreach($cars as $car)
                                        <li class="item-wrap">
                                            <div class="item">
                                                <div class="item-image">
                                                    <a href="{{ route('cars',$car->slug) }}"><img src="/images/cars/front/{{ $car->image2 }}" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="item-description">
                                                    <div class="item-meta">
                                                        <div class="item-post-date">
                                                            <span>{{ $car->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <ul class="list-inline product-social">
                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-title">
                                                        <h3><a href="{{ route('cars',$car->slug) }}"><b>{{ $car->title }}</b></a></h3>
                                                    </div>
                                                    <div class="item-info">
                                                        <p>{{ $car->subtitle }}</p>
                                                    </div>
                                                    <div class="item-info">
                                                        <p>{!! htmlspecialchars_decode(str_limit($car->body, $limit = 40, $end = '...')) !!}</p>
                                                    </div>
                                                </div><!-- item-description -->
                                            </div><!-- item -->
                                        </li><!-- item-wrap -->
                                    @endforeach
                                </ul>
                            </div> <!--tab-pane-->

                            {{-- <div role="tabpanel" class="tab-pane" id="recent">
                                <ul>
                                    @foreach($newsrecents as $newsrecent)
                                        <li class="item-wrap">
                                            <div class="item">
                                                <div class="item-image">
                                                    <a href="{{ route('news',$newsrecent->slug) }}"><img src="images/news/front/{{ $news->image2 }}" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="item-description">
                                                    <div class="item-meta">
                                                        <div class="item-post-date">
                                                                <span>{{ $newsrecent->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <ul class="list-inline product-social">
                                                            <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="item-title">
                                                        <h3><a href="{{ route('news',$newsrecent->slug) }}"><b>{{ $newsrecent->title }}</b></a></h3>
                                                    </div>
                                                    <div class="item-info">
                                                        <p>{{ $newsrecent->subtitle }}</p>
                                                    </div>
                                                </div><!-- item-description -->
                                            </div><!-- item -->
                                        </li><!-- item-wrap -->
                                    @endforeach
                                </ul>
                                <div class="pager-section">
                                    <ul class="pagination">
                                        <li class="next">{{ $newsrecents->links() }}<a href="#"></a></li>
                                    </ul>
                                </div><!-- pager-section -->
                            </div><!-- tab-pane -->		 --}}
                        </div>
                    </div>
                </div><!-- category-tab-->	
            </div>
        </div>
    </div><!-- category-tab-->	
</div><!-- .home-page -->
@endsection