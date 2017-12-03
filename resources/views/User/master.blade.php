<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>  <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title')</title>
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width">
	
	<link rel="stylesheet" href="{{ asset('public/user/style.css') }}">
	<link rel="stylesheet" href="{{ asset('public/user/css/responsive.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/js/bootstrap.min.js') }}" />
    <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/css/bootstrap.css') }}" />
     <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/js/jquery.js') }}" />
      <link rel="stylesheet" media="all" type="text/css" href="{{ asset('public/user/bootstrap/js/jQuery-2.1.4.min.js') }}" />
     <link href="{{ asset('public/user/css/select2.css') }}" rel="stylesheet"/>
     <link href="{{ asset('public/user/css/demoseach.css') }}" rel="stylesheet" type="text/css"/>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/demo.css') }}" media="all" />
  	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
     <link href="{{ asset('public/user/css/demo.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('public/user/js/libs/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('public/user/js/libs/jquery.js') }}"></script>
	<script src="{{ asset('public/user/js/libs/jquery-migrate-1.2.1.min.js') }}"></script>	

	<script src="{{ asset('public/user/js/plugins.js') }}"></script>
	<script src="{{ asset('public/user/js/script.js') }}"></script>
     <script type="text/javascript" src ="{!!asset('public\lv17_admin\dist\js\ckeditor/ckeditor.js')!!}"></script>
     <script src=”http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js”></script>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


	
</head>
<body>
	
	<header>
	<div id="header-top-bar"></div>
		<div class="width-container">
			<h1 id="logo"><a href="index-2.html"><img src="{{ asset('public/user/images/logo.png') }}" alt="WordPress Theme" width="288"></a></h1>
			<nav>
				<ul class="sf-menu">
					<li class="current-menu-item">
						<a href="{{ route('index') }}" style="color: black">Home</a>
					</li>
					<!-- <li>
						<a href="{{ route('getaboutus') }}">About us</a>
					</li>
				
					<li>
						<a href="{{ route('getmenu') }}">Menu</a>
					</li> -->
					
					<li>
						<a href="{{ route('getblog') }}">Tin Tức</a>
					</li>
					
					<li>
						<a href="{{ route('them-dia-diem') }}">Địa Điểm</a>
						<ul>
							<li>
								<a href="{{ route('them-dia-diem') }}">Tạo Địa Điểm</a>
							</li>
							<li>
								<a href="{{ route('them-gop-y') }}">Góp ý</a>
							</li>
							<!-- <li>
								<a href="{{ route('tim-kiem-dia-diem') }}">Viết Bình Luận</a>
							</li> -->
							
						</ul>
					</li>
						
					@if(Auth::check())
					
						<li>
							<a href="#">Chào bạn: {{ Auth::user()->tendangnhap }}</a>
						</li>
						
						<li> 
							<a href="{{ route('getDangxuat') }}">Đăng xuất</a>
						</li>
					@else

						<!-- <li><a type="button" data-toggle="modal" data-target="#dangky">Đăng ký</a></li>		 -->
						<li><a href="{{ route('dang-ky') }}">Đăng ký</a></li>			
						<li><a type="button" data-toggle="modal" data-target="#singin">Đăng nhập</a></li>
					@endif
					
					
				</ul>
			</nav>
		
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	</header>
	
	@yield('content')

	<div class="widget-area-highlight">
		<div class="width-container">
			
			<div class="grid4column homepage-widget">
				<h3 class="header-underline">About us</h3>
				<p>At dawn on the 13th the Carnatic entered the port of Yokohama. This is an important port of call in the Pacific, where all the mail-steamers.</p>
			</div>
			
			<div class="grid4column homepage-widget">
				<h3 class="header-underline">Email Updates</h3>
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="http://progressionstudios.us1.list-manage.com/subscribe/post?u=1a06aa3bca8613232881e8a6e&amp;id=2f5a556941" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<label for="mce-EMAIL">Join our digital mailing list and get news, deals, and be first to know about events at White Rock!</label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter e-mail address" required>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
				</div>
				<!--End MailChimp Signup Form-->
			</div>
			
			
			<div class="grid4column homepage-widget">
				<h3 class="header-underline">Visit us</h3>
				<h6 class="heading-address-widget">White Rock Restaurant</h6>
				<div class="address-widget">1422 1st St. Napa, CA 94559</div>
				<div class="phone-widget"><span>Phone:</span> (707) 255-0211</div>
				<div class="e-mail-widget"><span>E-mail:</span> <a href="#">admin@e-mail.com</a></div>
				<div class="social-icons">
						<a class="rss" href="#" target="_blank">r</a>
						<a class="facebook" href="http://facebook.com/" target="_blank">F</a>
						<a class="twitter" href="https://twitter.com/Progression_S" target="_blank">t</a>
						<a class="skype" href="http://skype.com/" target="_blank">s</a>
						<a class="vimeo" href="http://vimeo.com/" target="_blank">v</a>
						<a class="linkedin" href="http://linkedin.com/" target="_blank">l</a>
						<!--a class="dribbble" href="http://dribbble.com/" target="_blank">d</a-->
						<!--a class="forrst" href="http://forrst.com/" target="_blank">f</a-->
						<!--a class="flickr" href="http://flickr.com" target="_blank">n</a-->
						<!--a class="google" href="http://google.com" target="_blank">g</a-->
						<!--a class="youtube" href="http://youtube.com" target="_blank">y</a-->
						<div class="clearfix"></div>
				</div><!-- close .social-icons -->
			</div>
			
			
			
			<div class="grid4column homepage-widget lastcolumn">
				<h3 class="header-underline">Our Hours</h3>
				<ul id="open-hours">
					<li>
						<div class="date-day grid2column"><h6>Monday</h6></div><div class="hours-date grid2column lastcolumn">8:00 AM - 11:00 PM</div><div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column"><h6>Tuesday</h6></div><div class="hours-date grid2column lastcolumn">8:00 AM - 11:00 PM</div><div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column"><h6>Wednesday</h6></div><div class="hours-date grid2column lastcolumn">8:00 AM - 11:00 PM</div><div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column"><h6>Thursday</h6></div><div class="hours-date grid2column lastcolumn">8:00 AM - 11:00 PM</div><div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column"><h6>Friday</h6></div><div class="hours-date grid2column lastcolumn">11:00 AM - 11:00 PM</div><div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column"><h6>Saturday</h6></div><div class="hours-date grid2column lastcolumn">11:00 AM - 11:00 PM</div><div class="clearfix"></div>
					</li>
					<li>
						<div class="date-day grid2column"><h6>Monday</h6></div><div class="hours-date grid2column lastcolumn">Closed</div><div class="clearfix"></div>
					</li>
				</ul>
			</div>
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		</div><!-- close .widget-area-highlight -->
		
		<div class="clearfix"></div>
	
	<footer>
		<div class="width-container">
			<div id="copyright">
				
				<div class="grid2column">
					<a href="index-2.html"><img src="{{ asset('public/user/images/logo-footer.png') }}" width="150" alt="Logo-footer"></a>
				</div>
				
				<div class="grid2column lastcolumn">
					<ul>
						<li><a href="index-2.html">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="menu.html">Menu</a></li>
						<li><a href="blog.html">News</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
			<div class="clearfix"></div>
			</div><!-- close #copyright -->
		</div><!-- close .width-container -->
	</footer>

  


	
	<div class="container" style="height: 300px">
  
  <!-- Modal -->
  <div class="modal fade" id="dangky" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register</h4>
        </div>
        <div class="modal-body">

      <!--   @include('Admin.block.error')
        @include('Admin.block.flash') -->
        
        <div id="wufoo-qjtcw1a0xymtqt">
          <div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <a href=""><div class="tooltip">Click Me</div></a>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
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
                <label class="col-sm-2" >Hình ảnh</label>
                <span class="form_item">
                  <input type="file" name="newsImg" class="textbox" />
                </span><br />
           </div>
       <!--  <input type="radio" value="0" checked="checked" />Users -->
      <button type="submit" name="btnSaveNew">Register</button>
    </form>
  </div>
  <div class="cta"><a href="">Forgot your password?</a></div>
</div>
                
                </div><!-- end of left-area -->
        <div class="modal-footer" style="padding-top: 100px">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div class="container" style="height: 300px">
  
  <!-- Modal -->
  <div class="modal fade" id="singin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Singin</h4>
        </div>
        <div class="modal-body">

      <!--   @include('Admin.block.error')
        @include('Admin.block.flash') -->
        
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


	
</body>

	
	 <!--  <script src="{{ asset('public/user/js/jquery-1.8.0.min.js') }}"></script>
		<script src="{{ asset('public/user/js/select2.js') }}"></script>
		<script>
        $(document).ready(function() { 
            $("#states").select2({
                    placeholder: "Select a State",
                    allowClear: true
             }); 
        });
</script> -->
	 <script src="{{ asset('public/lv17_admin/jquery/myscript.js')}}"></script>
    <script src="{{ url('public/lv17_admin/jquery/myscrip.js') }}"></script>

<!-- Giao dien duoc chia se mien phi tai www.ptheme.net [Free HTML Download]. SKYPE[ptheme.net] - EMAIL[ptheme.net@gmail.com].-->
</html>