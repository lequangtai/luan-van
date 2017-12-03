@extends('User.master')
	@section('title','Trang món ăn')
	@section('content')
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>Mountain Panorama (Gallery)</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">
			
			<div class="portfolio-single-container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="item-portfolio-image">
								<a href="{{ asset('public/user/images/demo/photodune-815305-mountains-panorama-l-1140x550.jpg') }}" rel="prettyPhoto[gallery]">
							<img src="{{ asset('public/user/images/demo/photodune-815305-mountains-panorama-l-1140x550.jpg') }}" alt="slide" >
								</a>
							</div>
						</li>
					 	<li>
							<div class="item-portfolio-image">
								<a href="{{ asset('public/user/images/demo/photodune-1607300-woman-holding-snowboard-l-1140x550.jpg') }}" rel="prettyPhoto[gallery]">
									<img src="{{ asset('public/user/images/demo/photodune-1607300-woman-holding-snowboard-l-1140x550.jpg') }}" alt="slide" >
								</a>
							</div>
						</li>
						<li>
							<div class="item-portfolio-image">
								<a href="{{ asset('public/user/images/demo/photodune-1825493-freestyle-snowboarder-l-1140x550.jpg') }}" rel="prettyPhoto[gallery]">
									<img src="{{ asset('public/user/images/demo/photodune-1825493-freestyle-snowboarder-l-1140x550.jpg') }}" alt="slide" >
								</a>
							</div>
						</li>
					</ul>
				</div>
						<script type="text/javascript">
						jQuery(document).ready(function($) {
						    $('.flexslider').flexslider({
								animation: "fade",              //String: Select your animation type, "fade" or "slide"
								slideshow: true,                //Boolean: Animate slider automatically
								slideshowSpeed: 6500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
								animationDuration: 500,         //Integer: Set the speed of animations, in milliseconds
								directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
								controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
								keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
								mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
								prevText: "Previous",           //String: Set the text for the "previous" directionNav item
								nextText: "Next",               //String: Set the text for the "next" directionNav item
								pausePlay: false,               //Boolean: Create pause/play dynamic element
								pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
								playText: 'Play',               //String: Set the text for the "play" pausePlay item
								randomize: false,               //Boolean: Randomize slide order
								slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
								useCSS: true,
								animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
								pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
								pauseOnHover: false            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
						    });
						});
						</script>
			
			<div class="portfolio-post-background">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non tellus non turpis scelerisque condimentum sit amet at sem. Nullam risus urna, dignissim id fringilla vitae, volutpat sed sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
				<p>Morbi nibh neque, faucibus non tincidunt quis, sodales eget felis. In hac habitasse platea dictumst. Sed vulputate imperdiet iaculis. Nulla facilisi. Mauris et dui ac elit scelerisque laoreet.</p>
				<p>Nulla quam dui, varius a feugiat sed, hendrerit eu nunc. Suspendisse potenti. Nullam nunc nisi, condimentum at sagittis egestas, malesuada sit amet risus.</p>
				<p>Sed vehicula iaculis fermentum. Aenean nec lorem nibh, id tincidunt mi. Integer cursus dui suscipit dolor consectetur aliquet. Donec volutpat molestie condimentum. Vestibulum ullamcorper, dolor sit amet sodales pharetra, elit dui venenatis tortor, vel ullamcorper elit leo in nisi.</p>
				<p>Nullam eu consectetur urna. Fusce egestas velit nisi. Duis velit leo, vehicula eu ornare eget, cursus eget eros. Maecenas dui purus, suscipit nec euismod id, commodo et ante. Suspendisse id ipsum non massa vestibulum malesuada id scelerisque tortor.</p>
			</div><!-- close .portfolio-post-background -->
			
		</div><!-- close .portfolio-single-container -->
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		@endsection