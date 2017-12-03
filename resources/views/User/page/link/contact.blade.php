@extends('User.master')
	@section('title','Trang contact')
	@section('content')
	
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>Contact us</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">
			
			
			
			<div class="grid2column">
				
				<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=true&amp;ver=20120206'></script>
				<script type='text/javascript' src='{{ asset('public/user/js/jquery.gomap-1.3.2.min.js') }}'></script>
				<div id="map-contact"></div>
				<script type="text/javascript"> 
				jQuery(document).ready(function($) {
				    $("#map-contact").goMap({ 
				        markers: [{  
				            address: 'San Francisco, CA', 
				            title: 'marker title 1' ,
							icon: 'http://white-rock.progressionstudios.com/wp-content/themes/white-rock/images/pin.png'
				        }],
						disableDoubleClickZoom: true,
						zoom: 12,
						maptype: 'ROADMAP'
				    }); 
				});
				</script>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tellus enim, euismod in tempus ut, malesuada at massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				<p>Nunc nec elit sed magna pellentesque condimentum. In eget diam justo, nec tempus ante. In hac habitasse platea dictumst. Duis ultrices iaculis faucibus. In id mi sit amet velit feugiat et eu mauris.</p>
			</div>
			
			
			<div class="grid2column lastcolumn">
				
				<h3 class="header-underline">Send us a message</h3>
				 @include('Admin.block.error')
       			 @include('Admin.block.flash')
				
				<div id="wufoo-qjtcw1a0xymtqt">
					<form action="" method="post" id="contact-form">
				        {{ csrf_field() }}
				        <p><input type="text" name="txtname" id="cname" placeholder="Name here" style="border-radius: 0px; width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box; margin-top: 20px" /></p>
				        <p><input type="text" name="txtemail" id="cemail" placeholder="Email here" style="border-radius: 0px; width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" /></p>
				        <p><textarea name="txtmessage" id="cmessage" cols="30" placeholder="Message" rows="6" style="border-radius: 0px; width: 450px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"></textarea></p>
				        <p>
				        <input type="submit" name="btnSaveNew" id="contact-submit" value="Send Now" class="readmore" />
				        <img src="{{ asset('public/user/images/loading.gif') }}" id="contact-loader" alt="Loader" />
				        </p>
				        <p id="message-sent">Thanks for Your Message! <br /> We will get in touch shortly.</p>
				        <p>
				        <span class="w-pet-border"></span>
				        </p>
				        </form>
				
			</div>
		</div>
			<div class="clearfix"></div>
			
			
		
		</div><!-- close .width-container -->
	</div>
		
		@endsection