@extends('User.master')
	@section('title','Trang blog-post')
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
					<div class="blog-post-image">
						<a href="{{ asset('public/user/images/demo/photodune-471512-wine-cheese-garden-party-l-1024x682.jpg') }}" rel="prettyPhoto"><img src="{{ asset('public/user/images/demo/photodune-471512-wine-cheese-garden-party-l-1140x435.jpg') }}" class="aligncenter" alt="blog-image"></a>
					</div>
					<div class="blog-post-background">
						<h2 class="post-title">Wine &amp; Cheese Party</h2>
						<div class="post-details-meta">Posted on <a href="#">October 17, 2012</a> by <a href="#">mike</a></div>
						<div class="blog-post-excerpt">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu ligula eget lacus gravida lacinia ut at magna. Cras pellentesque eros in felis blandit eu ornare lorem porta. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In hac habitasse platea dictumst. Curabitur eu metus ac leo pharetra iaculis sit amet at metus. Mauris sed nibh a orci varius tristique. Quisque velit velit, imperdiet convallis blandit quis, molestie et eros. Duis ac pharetra orci. Phasellus vitae purus nibh. Sed tincidunt ante dignissim lorem molestie a tempor turpis tempor. Sed adipiscing venenatis massa, ut pulvinar turpis malesuada et.</p>
							<p>Pellentesque vitae felis eu mi suscipit luctus a ullamcorper eros. Quisque lectus enim, hendrerit euismod adipiscing vitae, ultrices at ligula. Pellentesque sit amet lacus sapien, ac convallis odio. Pellentesque mattis, nunc nec varius posuere, tortor quam sodales lectus, a ultricies dui lorem eget justo. Sed id purus nisi.</p>

							<p>Nulla ligula lacus, volutpat sed consectetur nec, molestie nec magna. Vestibulum porttitor dapibus risus, eget bibendum sem sodales non.Aliquam tristique varius lacus, nec pharetra felis dictum sit amet. Phasellus semper eleifend mi in malesuada. Aliquam placerat blandit neque sit amet congue. Etiam sit amet aliquam nisl.</p>

							<p>Nulla venenatis tempus ligula vel laoreet. Sed vulputate mattis pharetra. In tempus felis id leo fringilla pharetra. Maecenas in felis a sapien laoreet imperdiet. Sed ipsum felis, scelerisque eget gravida lacinia, posuere in est. Quisque ac blandit elit.</p>
						</div>
						
					</div><!-- close .blog-post-background -->
					
				<div class="clearfix"></div>
				</div><!-- close .type-post -->

			
			<div class="clearfix"></div>
			</div><!-- close .content-container-spacing -->
			
			<div id="sidebar">
				<div class="widget content-container">
					<h3 class="widget-title">Categories</h3>
					<ul>
						<li><a href="#">October 2012</a></li>
						<li><a href="#">September 2012</a></li>
						<li><a href="#">August 2012</a></li>
						<li><a href="#">July 2012</a></li>
					</ul>
				</div>
				<div class="sidebar-spacer"></div>
				
				
				<div class="widget content-container">
					<h3 class="widget-title">Archives</h3>
					<ul>
						<li><a href="#">October 2012</a></li>
						<li><a href="#">September 2012</a></li>
						<li><a href="#">August 2012</a></li>
						<li><a href="#">July 2012</a></li>
					</ul>
				</div>
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
		
		
	</div><!-- close #main -->
	
	@endsection