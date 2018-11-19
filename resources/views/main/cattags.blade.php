@extends('main/app')
@section('title','RPN-Advertisements')
@section('content')
<div class="page">
    <div id="breadcrumb-section" class="section">
        <div class="container">
            <div class="page-title text-center">
                {{-- <h1>All Categories</h1> --}}
            </div>
        </div>
    </div><!-- breadcrumb-section -->

    <div class="all-categories section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="category-adds">
                        <div id="category-tab">
                            <div class="category-tab">
                                <!-- Tab panes -->
                                <div class="tab-content small-view-tab">
                                    <div role="tabpanel" class="tab-pane active" id="recent">
                                        <ul>
                                            @foreach($cars as $car)
                                                <li class="item-wrap">
                                                    <div class="item">
                                                        <div class="item-image">
                                                            <a href=""><img src="/images/cars/front/{{ $car->image2 }}" alt="" class="img-responsive"></a>
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
                                                        </div><!-- item-description -->
                                                    </div><!-- item -->
                                                </li><!-- item-wrap -->
                                            @endforeach
                                        </ul>
                                    </div> <!--tab-pane-->
                                </div>
                            </div>
                        </div><!-- category-tab-->	
                    </div>
                    {{-- <div class="pager-section">
                        <ul class="pagination ">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li>{{ $news->links() }}<a href="#"></a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div><!-- pager-section --> --}}
                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="sidebar">
                        <div class="filter-list">
                            <div class="tab-view">
                                <ul class="list-inline">
                                    <li class="grid-view-tab"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                                    <li class="small-view-tab active"><i class="fa fa-th" aria-hidden="true"></i></li>
                                    <li class="list-view-tab"><i class="fa fa-th-list" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div><!-- filter-list -->
                        <br>
                        <br>
                        <br>
                        <div class="filter-list">
                            <h4 class="list-title"><a href="categories.html">Categories</a></h4>
                            <ul class="list-group">
                                @foreach($category as $cat)
                                <li><a href="{{ route('categories',$cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- filter-list -->

                        <div class="widget tags">
                            <h2 class="widget-title">Tags</h2>
                            <div class="widget-content">
                                @foreach($tag as $tg)
                                <a href="{{ route('tags',$tg->slug) }}">{{ $tg->name }}</a>
                                @endforeach
                            </div>
                        </div><!-- widget -->

                    </div><!-- sidebar -->
                </div><!-- col-sm-4 -->
            </div>
        </div>
    </div> <!-- all-categories -->
</div>	<!-- page -->
@endsection