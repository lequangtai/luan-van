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
    <h2>Create an account</h2>
   <form action="" method="POST" enctype="multipart/form-data"> 
    {{ csrf_field() }}
      <input type="text" placeholder="Họ tên" name="txtTen" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <input type="text" placeholder="Tên đăng nhập" name="tendn" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <input type="text" placeholder="Địa chỉ" name="txtDiachi" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <input type="password" placeholder="Password" name="txtPass" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <input type="email" placeholder="Email Address" name="txtEmail" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <input type="tel" placeholder="Phone Number" name="txtSDT" style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;" />
      <!-- <div> -->
       <label>Nam
                  <input type="radio" name="rdoGioitinh" value="0"  checked
                
                    @if(old('rdoGioitinh')==0)
                      checked 
                    @endif />
                </label>
                <label style="padding-left: 30px">Nữ
                  <input type="radio" name="rdoGioitinh" value="1" 
                    @if(old('rdoGioitinh')==1)
                      checked 
                    @endif />
                </label>
      <!-- </div> -->
      <div class="form-group ">
                <label class="col-sm-2" style="float: left;width: 100px;padding-left: 0" >Hình ảnh</label>
                <div style="clear: both;"></div>
                <span class="form_item">
                  <input type="file" name="newsImg" class="textbox" width="150px" style="float: right;" />
                </span><br />
           </div>
       <!--  <input type="radio" value="0" checked="checked" />Users -->
      <button type="submit" name="btnSaveNew">Register</button>
    </form>
  </div>
  <div class="cta"><a href="">Forgot your password?</a></div>
</div>
                
                </div><!-- end of left-area -->
                
        
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