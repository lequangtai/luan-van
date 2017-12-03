@extends('User.master')
@section('title','Trang contact')
@section('content')

		        <!-- ============= CONTENT AREA STARTS HERE ============== -->
		        <div id="content" class="clearfix">
				        <div id="left-area" class="clearfix">
				        <h2 class="title">Contact Us</h2>
				        <p>If food is an experience for you, then you will find it at the Food Recipe</p>
				        <div class="single-img-box">
							<div id="map_canvas"></div>			        
				        </div>
				        <h3>Quick Contact</h3>
				        <span class="w-pet-border"></span>
				        @include('admin.block.error')
						@include('admin.block.flash')
				        <form action="" method="post" id="contact-form">
				        {{ csrf_field() }}
				        <p><input type="text" name="txtname" id="cname" placeholder="Name here" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"  /></p>
				        <p><input type="text" name="txtemail" id="cemail" placeholder="Email here" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" /></p>
				        <p><textarea name="txtmessage" id="cmessage" cols="30" rows="6" style="border-radius: 0px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" >Message</textarea></p>
				        <p>
				        <input type="submit" name="btnSaveNew" id="contact-submit" value="Send Now" class="readmore" />
				        <img src="{{ asset('public/user/images/loading.gif') }}" id="contact-loader" alt="Loader" />
				        </p>
				        <p id="message-sent">Thanks for Your Message! <br /> We will get in touch shortly.</p>
				        <p>
				        <span class="w-pet-border"></span>
				        </p>
				        </form>
				        
				        </div><!-- end of left-area -->
				        
				        <div id="sidebar">
						        <div class="widget">
								        <h4 class="blue">Address</h4>
								        <ul>
										        <li>If food is an experience for you, then you will find it at the Food Recipe</li>
										        <li>Recipe north street, opp secure garden. Jalaal Pur Jattaan 364001</li>
										        <li>
												        <span class="phone">236-456-1226</span>
												        <span class="email">info@recipes.com</span>
												        <span class="note">236-456-321</span>
										        </li>
								        </ul>
						        		<div class="widget-bot-round"></div>
						        </div>
						        
						        <div class="widget">
								        <h4 class="blue">Sales Inquiries</h4>
								        <ul>
								        		<li>If food is an experience for you, then you will find it at the Food Recipe</li>
								        <li>
										        <span class="phone">236-456-1226</span>
										        <span class="email">info@recipes.com</span>
										        <span class="note">236-456-321</span>
								        </li>
								        </ul>
								        <div class="widget-bot-round"></div>
						        </div>
				        </div><!-- end of sidebar -->
		        
		        </div><!-- end of content div -->
                <!-- ========== CONTENT AREA ENDS HERE ========== -->
                
        </div><!-- end of container div -->
        <div class="w-pet-border"></div>
<!-- ============= CONTAINER AREA ENDS HERE ============== -->



<!-- ============= BOTTOM AREA STARTS HERE ============== -->
	    <div id="bottom-wrap">
		    	<ul id="bottom" class="clearfix">
			        	<li>
				            	<div class="about">
					                	<a href="index-2.html"><img src="{{ asset('public/user/images/footer-logo.png') }}" alt="Footer Logo" class="footer-logo" /></a>
					                    <p>For every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. For every fine wine, there’s the For every fine wine...</p>
					                    <a href="#" class="readmore">Read more About Us</a>
				                </div>
						</li>
						<li>
								<h2>Recent <span>Recipes</span></h2>
								<ul class="recent-posts">
										<li>
												<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_16.jpg') }}" alt="Image" /></a>
												<h5><a href="#">The World's Best</a></h5>
												<p>Sandwich Recipes here once there will be chnace of going to go</p>
										</li>
										
										<li>
												<a href="#" class="img-box"><img src="{{ asset('public/user/images/tiny-images/tiny_17.jpg') }}" alt="Image" /></a>
												<h5><a href="#">The World's Best</a></h5>
												<p>Sandwich Recipes here once there will be chnace of going to go</p>
										</li>
								</ul>
						</li>
			            
			            <li>
								<h2>Twitter <span>Updates</span></h2>
								<div id="twitter_update_list" class="twitter">
								</div>
						</li>
			            
				</ul><!-- end of bottom div -->
	    </div><!-- end of bottom-wrap div -->
<!-- ============= BOTTOM AREA ENDS HERE ============== -->


<!-- ============= FOOTER STARTS HERE ============== -->	
        
        <div id="footer-wrap">
				<div id="footer">
						<p class="copyright">Copyright © 2014, Food Recipes - A Premium HTML Template</p>
						<p class="dnd">Developed by <a href="http://inspirythemes.com/">inspirythemes</a></p>
				</div><!-- end of footer div -->
		</div><!-- end of footer-wrapper div -->
        
<!-- ============= FOOTER ENDS HERE ============== -->

    
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
    <script type="text/javascript" src="{{ asset('public/user/js/jquery.form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/user/js/twitterFetcher_v10_min.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script type="text/javascript">
        var map;
        // Google Map
        function initialize() {
            var myOptions = {
                center: new google.maps.LatLng(48.87366, 2.29507),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
                    myOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<!-- script file to add your own JavaScript -->
	<script type="text/javascript" src="{{ asset('public/user/js/script.js') }}"></script>

</body>

<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:09:27 GMT -->
</html>
@endsection