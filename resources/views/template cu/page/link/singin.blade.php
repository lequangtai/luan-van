
@extends('User.master')
@section('title','Trang Đăng nhập')
@section('content')

            <!-- ============= CONTENT AREA STARTS HERE ============== -->
            <div id="content" class="clearfix">
                <div id="left-area" class="clearfix">
               <!--  <h2 class="title">Contact Us</h2>
                <p>If food is an experience for you, then you will find it at the Food Recipe</p>
                <div class="single-img-box">
              <div id="map_canvas"></div>             
                </div> -->
                <h3>Singin</h3>
        <!-- <form action="" method="POST" enctype="multipart/form-data" style="width: 850px; margin-left: 100px"> -->
        
                <span class="w-pet-border"></span>
                
                <title>Login Form với CSS3 và jQuery</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/demo.css') }}" media="all" />
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head>
<body>
@include('Admin.block.error')
@include('Admin.block.flash')
<!-- Form Module-->
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
   <!--  -->

  <!-- script file to add your own JavaScript -->
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

</body>

<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:09:27 GMT -->
</html>
@endsection
