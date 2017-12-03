<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:02:27 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame. Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
	<title>@yield('title')</title>
	
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset('public/user/css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('public/user/js/nivo-slider/nivo-slider.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/js/prettyPhoto/css/prettyPhoto.css') }}" />
    <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/js/bootstrap.min.js') }}" />
    <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/css/bootstrap.css') }}" />
    
	<!-- Generate Favicon Using 1.http://tools.dynamicdrive.com/favicon/ OR 2.http://www.favicon.cc/ -->
	<link rel="shortcut icon" href="favicon.png" />
		
</head>
<!--[if IE ]> <body class="ie"> <![endif]-->
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


<!-- ============= HEADER STARTS HERE ============== -->
<div id="header-wrapper">
				
		        <div id="header">
					<!-- WEBSITE LOGO -->
		            <a href="{{ route('getthumbslider') }}"><img src="{{ asset('public/user/images/logo.png') }}" alt="Food Recipes" class="logo" /></a>
		            
				</div><!-- end of header div -->
				
                <!-- NAVIGATION BAR STARTS HERE -->
		        <div id="nav-wrap">
						<div class="inn-nav clearfix">
		                		
		                        <!-- MAIN NAVIGATION STARTS HERE -->
								<ul class="nav">
										<li class="active"><a href="{{ route('getbasicslider') }}">Home</a></li>
										<li>
												<a href="#">Sliders</a>
												<ul>
														<li><a href="{{ route('getbasicslider') }}">Basic Slider</a></li>
														<li><a href="{{ route('getrightslider') }}">Right Info Slider</a></li>
														<li><a href="{{ route('getnivoslider') }}">Nivo Slider</a></li>
														<li><a href="{{ route('getaccordionslider') }}">Accordion Slider</a></li>
														<li><a href="{{ route('getthumbslider') }}">Thumbnail Slider</a></li>
												
												</ul>
										</li>
										<li><a href="{{ route('getrecipes') }}">Recent Recipes</a></li>
                                       <!--  <li>
												<a href="{{ route('getsinglesb') }}">Recipe Detail</a>
												<ul>
														<li><a href="{{ route('getsinglesb') }}">Variation One</a></li>
														<li><a href="{{ route('getsinglefull') }}">Variation Two</a></li>
												</ul>
										</li> -->
										<li><a href="{{ route('getservices') }}">Services</a></li>
										<li><a href="{{ route('getblog') }}">Tin Tức</a></li>
										<!-- <li><a href="{{ route('getsingle') }}">Single Post</a></li>	 -->
										<li><a href="{{ route('them-gop-y') }}">Góp ý</a></li>	
										<li><a href="{{ route('them-dia-diem') }}">Tạo Địa Điểm</a></li>
										@if(Auth::check())
											<li> <a href="{{ route('dang-nhap') }}">Chào bạn: {{ Auth::user()->tendangnhap }}</a></li>
											<li> <a href="{{ route('getDangxuat') }}">Đăng xuất</a></li>
										@else
											<li> <a href="{{ route('dang-ky') }}">Đăng ký</a></li>				
											<li> <a href="{{ route('dang-nhap') }}">Đăng nhập</a></li>
										@endif
										

								</ul><!-- end of nav ul -->
								<!-- MAIN NAVIGATION ENDS HERE -->
									
		                        
		                        <!-- SOCIAL NAVIGATION -->
								<ul class="social-nav">
		                                <li class="twitter"><a href="#"></a></li>
		                                <li class="facebook"><a href="#"></a></li>
		                                <li class="flickr"><a href="#"></a></li>
		                               <!--  <li class="rss"><a href="#"></a></li> -->
								</ul><!-- end of social-nav ul -->
						</div>
				</div><!-- end of nav-wrap -->
				<!-- NAVIGATION BAR ENDS HERE -->
		
				<span class="w-pet-border"></span>
		
</div><!-- end of header-wrapper div -->

<!-- ============= HEADER ENDS HERE ============== -->


<!-- ============= CONTAINER STARTS HERE ============== -->
		
        <div id="container">
		
		        <!-- WEBSITE SEARCH STARTS HERE -->    	
				<div class="top-search clearfix">
						<h3 class="head-pet"><span>Recipe Search</span></h3>
						<form action="#" id="searchform" method="post">
								<p>
										<input type="text" name="2" id="s" class="field" value="Search for" />
										<input type="submit" name="s_submit" id="s-submit" value="" />
								</p>
						</form>
						<p class="statement"><span class="fireRed">Popular searches :</span> <a href="#">meatloaf recipes</a>, <a href="#">banana cake recipes</a>, <a href="#">cheesecake recipes</a>, <a href="#">carbonara recipes</a></p>
				</div><!-- end of top-search div-->

		@yield('content')
<!-- </div> -->
<!-- ============= FOOTER STARTS HERE ============== -->	
        
        <div id="footer-wrap">
				<div id="footer">
						<p class="copyright">Copyright © 2014, Food Recipes - A Premium HTML Template</p>
						<p class="dnd">Developed by <a href="http://inspirythemes.com/">inspirythemes</a></p>
				</div><!-- end of footer div -->
		</div><!-- end of footer-wrapper div -->
        
<!-- ============= FOOTER STARTS HERE ============== -->
    
    
    
	<!-- Remove it if you do not need jQuery -->
	<script type="text/javascript" src="{{ asset('public/user/js/jquery-1.11.0.js') }}"></script>

	<!-- Remove it if you do not need jquery.easing : http://gsgd.co.uk/sandbox/jquery/easing/ -->
	<script type="text/javascript" src="{{ asset('public/user/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/jquery.cycle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/jquery.backgroundPosition.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/nivo-slider/jquery.nivo.slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/twitterFetcher_v10_min.js') }}"></script>
     <script src="{{ asset('public/lv17_admin/jquery/myscript.js')}}"></script>
    <script src="{{ url('public/lv17_admin/jquery/myscrip.js') }}"></script>
	<!-- script file to add your own JavaScript -->
	<!-- <script type="text/javascript" src="{{ asset('public/user/popup.js') }}"></script> -->

</body>

<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:03:07 GMT -->
</html>