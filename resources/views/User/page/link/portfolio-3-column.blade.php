@extends('User.master')
	@section('title','Trang món ăn')
	@section('content')
	
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>Portfolio 3 Column</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">
			
			<ul class="filter-children">
				<li><a href='portfolio-2-column.html'>Portfolio 2 Column</a></li>
				<li class="current_page_item"><a href="portfolio-3-column.html">Portfolio 3 Column</a></li>
				<li><a href="portfolio-4-column.html">Portfolio 4 Column</a></li>
			</ul>
			
			<div class="grid3column">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a href="{{ asset('public/user/images/demo/photodune-513647-fresh-green-meadow-m-600x338.jpg') }}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="{{ asset('public/user/images/demo/photodune-513647-fresh-green-meadow-m-600x338.jpg') }}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a href="portfolio-post.html">Fresh Meadow</a></h4>
						<p>Example excerpt can be added for each portfolio item...</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			
			<div class="grid3column">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a href="{{ asset('public/user/images/demo/photodune-514835-forest-walk-m-600x338.jpg') }}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="{{ asset('public/user/images/demo/photodune-514835-forest-walk-m-600x338.jpg') }}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a href="portfolio-post.html">Forest Walk</a></h4>
						<p>Example excerpt can be added for each portfolio item...</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			
			
			<div class="grid3column lastcolumn">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<div class="video-container"><iframe width="560" height="315" src="http://www.youtube.com/embed/kh29_SERH0Y" frameborder="0" allowfullscreen></iframe></div>	
					</div>
					<div class="portfolio-post-background">
						<h4><a href="portfolio-post.html">Art of Flight</a></h4>
						<p>Example excerpt can be added for each portfolio item...</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			<div class="clearfix"></div>
			
			
			
			<div class="grid3column">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a href="{{ asset('public/user/images/demo/photodune-524369-sunset-m1-600x338.jpg') }}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="{{ asset('public/user/images/demo/photodune-524369-sunset-m1-600x338.jpg') }}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a href="portfolio-post.html">Ocean Sunset</a></h4>
						<p>Example excerpt can be added for each portfolio item...</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			
			<div class="grid3column">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a href="{{ asset('public/user/images/demo/photodune-815305-mountains-panorama-l-600x338.jpg') }}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="{{ asset('public/user/images/demo/photodune-815305-mountains-panorama-l-600x338.jpg') }}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a href="portfolio-post.html">Mountain Panorama</a></h4>
						<p>Example excerpt can be added for each portfolio item...</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			
			
			<div class="grid3column lastcolumn">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a href="{{ asset('public/user/images/demo/photodune-1165010-road-m-600x338.jpg') }}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="{{ asset('public/user/images/demo/photodune-1165010-road-m-600x338.jpg') }}" alt="portfolio-image" /></a>		
					</div>
					<div class="portfolio-post-background">
						<h4><a href="portfolio-post.html">Curved Road</a></h4>
						<p>Example excerpt can be added for each portfolio item...</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			<div class="clearfix"></div>
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		@endsection