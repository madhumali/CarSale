@extends('main/app')
@section('title','RPN-Advertisement-Page')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=258938004790566&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="page">
	<div id="breadcrumb-section" class="section">
		<div class="container">
			<div class="page-title text-center">
				<h1>Advertisement Page</h1>
			</div>
		</div>
	</div><!-- breadcrumb-section -->
	<div class="ad-post-wrapper section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="blog-content blog-detail">
						<div class="blog-post">
							<div class="entry-thubmnail">
								<img class="img-responsive" src="/images/cars/{{$cars->image}}" alt="" />
							</div>
							<div class="entry-content">	
								<h3 class="entry-title">{{ $cars->title }}</h3>
								<div class="entry-meta">
									<span>Categories</span>|
									@foreach( $cars->categories as $category)
										<a href="{{ route('categories',$category->slug) }}" style="background-color: #92a8d1; font-size:12px; font-weight:bold; margin-right:5px; border-radius:5px; border:1px solid gray; padding:5px;">{{ $category->name }}</a>
									@endforeach
								</div>
								<br>
								<div class="post-excerpt">
									<p> {!! htmlspecialchars_decode($cars->body) !!} </p>
								</div>
								<div class="entry-meta">
									<span>By <a href="#">Tags</a></span>|
									@foreach( $cars->tags as $tag)
										<a href="" style="background-color: #92a8d1; font-size:12px; font-weight:bold; margin-right:5px; border-radius:5px; border:1px solid gray; padding:5px;">{{ $tag->name }}</a>
									@endforeach
								</div>
								<a class="date" href="#"><span>{{ $cars->created_at->format('d') }}</span>{{ $cars->created_at->format('M') }}</a>
							</div>
							<div class="post-comments">
								<ul class="comment-list">
									<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
								</ul>
							</div><!-- post-comments -->
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="sidebar">
						<div class="widget search-widget">
							<div class="widget-content">
								<form role="search" id="search-form" method="get" action="#">
									<input type="search" autocomplete="off" name="search" placeholder="Search..." id="search-input" value="">
									<button type="submit" id="search-submit" class="btn"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div><!-- widget -->
						<div class="item-author widget">
							<h4>Recent Advertisements</h4>
							<br>
							@foreach($recents as $recent)
								<div class="row">
									<div class="col-md-4">
										<div class="seller-image">
											<a href="{{ route('cars',$recent->slug) }}"><img class="img-responsive" src="/images/cars/front/{{$recent->image2}}" alt="seller"></a>
										</div>
									</div>
									<div class="col-md-8">
										<div class="seller-info">
											<p><a href="{{ route('cars',$recent->slug) }}">{{ $recent->subtitle }}</a></p>
										</div>
									</div>
								</div>
								<br>
							@endforeach
						</div>
						<div class="widget">
							<h2 class="widget-title">Categories</h2>
							<div class="widget-content">
								<ul>
									@foreach($categories as $category)
									<li><a href="{{ route('categories',$category->slug) }}">{{ $category->name }}</a></li>
									@endforeach
								</ul>
							</div>
						</div><!-- widget -->
						<div class="widget tags">
							<h2 class="widget-title">Tags</h2>
							<div class="widget-content">
								@foreach($tags as $tag)
								<a href="{{ route('tags',$tag->slug) }}">{{ $tag->name }}</a>
								@endforeach
							</div>
						</div><!-- widget -->
					</div><!-- sidebar -->
				</div>
			</div>
		</div>
	</div> <!-- ad-post -->
</div>	<!-- page -->
@endsection