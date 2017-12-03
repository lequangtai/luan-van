@extends('User.master')
  @section('title','Trang contact')
  @section('content')
<head>
    <title>Login Form với CSS3 và jQuery</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/demo.css') }}" media="all" />
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head>
  
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
          <div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <a href=""><div class="tooltip">Click Me</div></a>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
      <form action="{{ route('dang-nhap') }}" method="POST" enctype="multipart/form-data"> 
     {{ csrf_field() }}
    
      <input type="text" name="txttendn" placeholder="Username" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <input type="password" name="pass" placeholder="Password" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <button type="submit" >Login</button>
    </form>
  </div>
  </div>
        
      </div>
    </div>
      <div class="clearfix"></div>
      
      
    
    </div><!-- close .width-container -->
  </div>
  <script type="text/javascript" src="{{ asset('public/user/js/script.js') }}"></script>
  <script src="{{ asset('public/user/js/jquery.min.js') }}"></script>
<script type="text/javascript">
     // Toggle Function
$('.toggle').click(function(){
  // Switches the Icon
  $(this).children('i').toggleClass('fa-pencil');
  // Switches the forms  
  $('.form').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: "toggle"
  }, "slow");
});
</script>
    
    @endsection