@extends('main/app')
@section('title','RPN-Advertisements')
@section('content')
<div class="page">
    <div id="breadcrumb-section" class="section">
        <div class="container">
            <div class="page-title text-center">
                <h1>All Categories Ad Post</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">All Ads</li>
                </ol>
            </div>
        </div>
    </div><!-- breadcrumb-section -->
    <div id="search-section">
        <div class="container">
            <form action="#">
                <div class="search-section">
                    <ul>
                        <li>
                            <div class="dropdown category-dropdown">						
                                <a data-toggle="dropdown" href="#"><span class="change-text">All Categories</span> <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu category-change">
                                    <li><a href="#">Art & Entertainment</a></li>
                                    <li><a href="#">Cars & Vehicles</a></li>
                                    <li><a href="#">Sports & Games</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Megazine</a></li>
                                </ul>								
                            </div><!-- category-change -->
                        </li>
                        <li>
                            <div class="dropdown category-dropdown">						
                                <a data-toggle="dropdown" href="#"><span class="change-text">All Locations</span> <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu category-change">
                                    <li><a href="#">Australia</a></li>
                                    <li><a href="#">Argentina</a></li>
                                    <li><a href="#">Belgium</a></li>
                                    <li><a href="#">Brazil</a></li>
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">China</a></li>
                                    <li><a href="#">France</a></li>
                                </ul>								
                            </div><!-- category-change -->
                        </li>
                        <li>
                            <input type="text" class="form-control" placeholder="What are you looking for ?">
                        </li>
                        <li>
                            <button type="submit" class="form-control btn btn-primary" value="Search">Search</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div><!-- search-section -->

    <div class="all-categories section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="category-adds">
                        <div id="category-tab">
                            <div class="tab-view">
                                <ul class="list-inline">
                                    <li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                                    <li class="small-view-tab active"><i class="fa fa-th" aria-hidden="true"></i></li>
                                    <li class="list-view-tab"><i class="fa fa-th-list" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="category-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#recent" aria-controls="recent" role="tab" data-toggle="tab">Recent</a></li>
                                    <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
                                    <li role="presentation"><a href="#Random" aria-controls="Random" role="tab" data-toggle="tab">Random</a></li>
                                </ul>
                                <!-- Tab panes -->

                                <div class="tab-content small-view-tab">
                                    <div role="tabpanel" class="tab-pane active" id="recent">
                                        <ul>
                                            {{-- @foreach($news as $news)
                                            <li class="item-wrap">
                                                <div class="item">
                                                    <div class="item-image">
                                                        <a href="details.html"><img src="images/item/7.jpg" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="item-description">
                                                        <div class="item-meta">
                                                            <div class="item-post-date">
                                                                <span>{{ $news->created_at->diffForHumans() }}</span>
                                                            </div>
                                                            <ul class="list-inline product-social">
                                                                <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-title">
                                                            <h3><a href="{{ route('news',$news->slug) }}"><b>{{ $news->title }}</b></a></h3>
                                                        </div>
                                                        <div class="item-info">
                                                            <p>{{ $news->subtitle }}</p>
                                                        </div>
                                                    </div><!-- item-description -->
                                                </div><!-- item -->
                                            </li><!-- item-wrap -->
                                            @endforeach --}}
                                        </ul>
                                    </div> <!--tab-pane-->

                                    <div role="tabpanel" class="tab-pane" id="popular">
                                        <ul>
                                            {{-- @foreach($news as $news)
                                            <li class="item-wrap">
                                                <div class="item">
                                                    <div class="item-image">
                                                        <a href="details.html"><img src="images/item/7.jpg" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="item-description">
                                                        <div class="item-meta">
                                                            <div class="item-post-date">
                                                                <span>{{ $news->created_at->diffForHumans() }}</span>
                                                            </div>
                                                            <ul class="list-inline product-social">
                                                                <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-title">
                                                            <h3><a href="{{ route('news',$news->slug) }}"><b>{{ $news->title }}</b></a></h3>
                                                        </div>
                                                        <div class="item-info">
                                                            <p>{{ $news->subtitle }}</p>
                                                        </div>
                                                    </div><!-- item-description -->
                                                </div><!-- item -->
                                            </li><!-- item-wrap -->
                                            @endforeach --}}
                                        </ul>
                                    </div><!-- tab-pane -->	

                                    <div role="tabpanel" class="tab-pane" id="Random">
                                        <ul>
                                            {{-- @foreach($news as $news)
                                            <li class="item-wrap">
                                                <div class="item">
                                                    <div class="item-image">
                                                        <a href="details.html"><img src="images/item/7.jpg" alt="" class="img-responsive"></a>
                                                    </div>
                                                    <div class="item-description">
                                                        <div class="item-meta">
                                                            <div class="item-post-date">
                                                                <span>{{ $news->created_at->diffForHumans() }}</span>
                                                            </div>
                                                            <ul class="list-inline product-social">
                                                                <li><a href="#"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="item-title">
                                                            <h3><a href="{{ route('news',$news->slug) }}"><b>{{ $news->title }}</b></a></h3>
                                                        </div>
                                                        <div class="item-info">
                                                            <p>{{ $news->subtitle }}</p>
                                                        </div>
                                                    </div><!-- item-description -->
                                                </div><!-- item -->
                                            </li><!-- item-wrap -->
                                            @endforeach --}}
                                        </ul>
                                    </div><!-- tab-pane-->	
                                </div>
                            </div>
                        </div><!-- category-tab-->	
                    </div>
                    <div class="pager-section">
                        <ul class="pagination ">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="active"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div><!-- pager-section -->
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="sidebar">
                        <div class="filter-list">
                            <h4 class="list-title"><a href="categories.html">Categories</a></h4>
                            <ul class="list-group">
                                {{-- @foreach($categories as $category)
                                <li><a href="{{ route('categories',$category->slug) }}">{{ $category->name }}<span>{{ $category->news->count() }}</span></a></li>
                                @endforeach --}}
                                <li><a href="#">Others <span>(42)</span></a></li>
                            </ul>
                        </div><!-- filter-list -->

                        <div class="filter-list">
                            <h4 class="list-title">Location</h4>
                            <ul class="list-group">
                                <li><a href="#">Australia <span>(56)</span></a> </li>
                                <li><a href="#">Argentina <span>(17)</span></a></li>
                                <li><a href="#">Brazil <span>(109)</span></a></li>
                                <li><a href="#">Canada <span>(219)</span></a></li>
                                <li><a href="#">China <span>(21)</span></a></li>
                                <li><a href="#">India <span>(632)</span></a></li>
                                <li><a href="#">Japan <span>(42)</span></a></li>
                                <li><a href="#">United Kingdom <span>(441)</span></a></li>
                                <li><a href="#">United States <span>(52)</span></a></li>
                            </ul>
                        </div><!-- filter-list -->

                        <div class="filter-list brand-list">
                            <h4 class="list-title">Brands</h4>
                            <ul class="list-group checkbox">
                                <li><label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label></li>
                                <li><label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label></li>
                                <li><label for="lg"><input type="checkbox" name="lg" id="lg"> LG</label></li>
                                <li><label for="xiaomi"><input type="checkbox" name="xiaomi" id="xiaomi"> Xiaomi</label></li>
                                <li><label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label></li>
                                <li><label for="huawei"><input type="checkbox" name="huawei" id="huawei"> Huawei</label></li>
                                <li><label for="alcatel"><input type="checkbox" name="alcatel" id="alcatel"> Alcatel</label></li>
                            </ul>
                        </div><!-- filter-list -->

                        
                        <div class="filter-list">
                            <div id="advanced-filter">
                                <div class="filter-heading">
                                    <a data-toggle="collapse" data-parent="#advanced-filter" href="#advanced">
                                        <h4 class="list-title">Advanced Filter<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                    </a>
                                </div><!-- filter-heading -->

                                <div id="advanced" class="panel-collapse collapse">
                                    <!-- panel-body -->
                                    <div class="panel-body">
                                        <h5>Conditions</h5>
                                        <ul class="list-group checkbox">
                                            <li><label for="new"><input type="checkbox" name="new" id="new">New</label></li>
                                            <li><label for="likeNew"><input type="checkbox" name="likeNew" id="likeNew"> Like New</label></li>
                                            <li><label for="used"><input type="checkbox" name="used" id="used"> Used</label></li>
                                            <li><label for="excellent"><input type="checkbox" name="excellent" id="excellent"> Excellent</label></li>
                                            <li><label for="good"><input type="checkbox" name="good" id="good"> Good</label></li>
                                            <li><label for="fair"><input type="checkbox" name="fair" id="fair"> Fair</label></li>
                                        </ul>
                                        <h5>Price Range</h5>
                                        <div class="price-range">
                                            <label for="min"><input type="text" id="min" title="minimum price" placeholder="min" value=""></label>
                                            <label for="max"><input type="text" id="max" title="maximum price" placeholder="max" value=""></label>
                                            <button type="submit" class="btn btn-primary">Update Search</button>
                                        </div>
                                    </div><!-- panel-body -->
                                </div>
                                </div><!-- advanced-filter -->
                        </div><!-- filter-list -->
                    </div><!-- sidebar -->
                </div><!-- col-sm-4 -->
            </div>
        </div>
    </div> <!-- all-categories -->
</div>	<!-- page -->
@endsection