@extends('User.master')
@section('title','Trang blog')
@section('content')
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>Latest News</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">
			
			<div id="container-sidebar"><!-- sidebar content container -->
			
				<div class="type-post">
					@php
					$diadiem=App\Models\Diadiem::select()->get()->toArray();
					$loaitin=App\Models\Loaitin::select()->get()->toArray();
	  				$tintuc = App\Models\Tintuc::with('loaitin')->paginate(3);
	  				 
	  				@endphp
					@foreach($tintuc as $tt)
					@foreach($diadiem as $dd)
					@if($dd['id']==$tt['diadiem_id'])
					<div class="blog-post-image">
						<a href="blog-post.html"><img src="public/uploads/news/{!!$tt["hinhanh"]!!}" class="aligncenter" alt="blog-image" style="width: 100%; height: 300px"></a>
					</div>
					<div class="blog-post-background">
						<h2 class="post-title"><a href="blog-post.html">{!! $tt['tieude'] !!}</a></h2>
						<div class="post-details-meta">Posted on <a href="#">{!! $tt['created_at'] !!}</a> by <a href="{!! url('chi-tiet-dia-diem/'.$dd['id'].'/'.$dd['slug'].'.html')!!}">{!! $dd['tendiadiem'] !!}</a></div>
						<div class="blog-post-excerpt">
							<p>{!! $tt['tomtat'] !!}</p>
						</div>
						<p><a href="blog-post.html" class="rock-button">Read more</a></p>
						@endif
						@endforeach
						@endforeach
					</div><!-- close .blog-post-background -->
					
				<div class="clearfix"></div>
				</div><!-- close .type-post -->
				
				
				</div>	
				
				
				
				
				
				
				
				
				
			
			<div class="clearfix"></div>
			</div><!-- close .content-container-spacing -->
			
			<div id="sidebar">
				<div class="widget content-container">
					<h3 class="widget-title">Categories</h3>
					<ul>
						@foreach($loaitin as $lt)
						<li><a href="{!! url('blog/'.$lt['id'])!!}">{!! $lt['tenloaitin'] !!}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="sidebar-spacer"></div>
				
				<!-- 
				<div class="widget content-container">
					<h3 class="widget-title">Archives</h3>
					<ul>
						<li><a href="#">October 2012</a></li>
						<li><a href="#">September 2012</a></li>
						<li><a href="#">August 2012</a></li>
						<li><a href="#">July 2012</a></li>
					</ul>
				</div> -->
				<div class="sidebar-spacer"></div>
				
				
				<div class="widget content-container">
					<script type="text/javascript">
					//Flickr Widget in Sidebar			
					jQuery(document).ready(function($){		 			   
						// Our very special jQuery JSON fucntion call to Flickr, gets details of the most recent images			   
						$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=52617155@N08&amp;lang=en-us&amp;format=json&amp;jsoncallback=?", displayImages);  //YOUR IDGETTR GOES HERE
						function displayImages(data){																															   
							// Randomly choose where to start. A random number between 0 and the number of photos we grabbed (20) minus  7 (we are displaying 7 photos).
							var iStart = Math.floor(Math.random()*(0));	

							// Reset our counter to 0
							var iCount = 1;								

							// Start putting together the HTML string
							var htmlString = "<ul>";					

							// Now start cycling through our array of Flickr photo details
							$.each(data.items, function(i,item){

								// Let's only display 6 photos (a 2x3 grid), starting from a the first point in the feed				
								if (iCount > iStart && iCount < (iStart + 7)) {

									// I only want the ickle square thumbnails
									var sourceSquare = (item.media.m).replace("_m.html", "_s.html");		

									// Here's where we piece together the HTML
									htmlString += '<li><a href="' + item.link + '" target="_blank">';
									htmlString += '<img src="' + sourceSquare + '" alt="' + item.title + '" title="' + item.title + '"/>';
									htmlString += '</a></li>';
								}
								// Increase our counter by 1
								iCount++;
							});		

						// Pop our HTML in the #images DIV	
						$('.flickr-widget-1').html(htmlString + "</ul>");

						// Close down the JSON function call
						}

					// The end of our jQuery function	
					});
					</script>
					<div id="flickr-widget" class="flickr-widget-1"></div>
				</div>
				<div class="sidebar-spacer"></div>
				
			</div><!-- close #sidebar -->
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		
		<div class="clearfix"></div>
	</div><!-- close #main -->
	
	@endsection