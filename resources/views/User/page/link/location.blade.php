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

  
  
 <!--  <div id="main">
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
       -->
      
      <div class="grid2column lastcolumn" style="margin-left: 200px;width: 50%; float: left;">
        
        <h3 class="header-underline">Đăng Ký Địa Điểm</h3>
   <div class="form">
     <span class="w-pet-border"></span>
				        
				        <form action="" method="POST" enctype="multipart/form-data"" id="contact-form">
				        	@include('Admin.block.error')
						@include('Admin.block.flash')
				        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        	
				        <p>
				        	<div style="width: 30%;float: left;margin-top: 50px">Tên địa điểm:</div> 
				        	<div><input type="text" name="txttendiadiem"  id="ctxttendiadiem" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;margin-top: 50px" /></div>
				        </p>
				        <p>
				        	<div style="width: 30%;float: left;">Địa chỉ:</div> 
				        	<div><input type="text" name="txtdiachi" id="ctxtdiachi" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"/></div>
				        </p>
				        <p>
				        	<div style="width: 30%;float: left;">Điện thoại:</div> 
				        	<div><input type="text" name="txtdienthoai"  id="ctxtdienthoai" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"/></div>
				        </p>
				        <p>
				        	<div style="width: 30%;float: left;">Email:</div> 
				        	<div><input type="text" name="email"  required" id="cemail" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"/></div>
				        </p>
				   
				          <p>
				          	<div style="width: 30%;float: left;">Tỉnh thành:</div> 
				          	<div style="border-radius: 0px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"> 
				          		<select class="col-sm-8 select2" name="sltCate1" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"">

				          		<option value="0">Tỉnh thành</option>
				          		
			                    @foreach($tinh as $tt)
			                    <option value="{{ $tt["id"] }}">{{ $tt["tentinhthanh"] }}</option>
			                    @endforeach
				              	</select>
				          	</div>
				          </p>
				           <p>
				           	<div style="width: 30%;float: left;">Quận:</div> 
				           	<div>
				           		<select class="col-sm-8 select2" name="sltCate2" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"">
				          		<option value="0">Quận</option>
				          		
				          		 @foreach($quan as $qh)
			                    <option value="{{ $qh["id"] }}">{{ $qh["tenquan"] }}</option>
			                     @endforeach
			                      
			                    
			                     
			                    
			                   


			                   
				              	</select>
				           	</div>
				           </p>
				         <p>
				         	<div style="width: 30%;float: left;margin-top: 15px">Giờ mở cửa:</div> 
				         	<div><input type="time" name="txtgiomc"  id="ctxtgiomc" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box; margin-top: 15px"/></div>
				         
				         </p>
				         <p>
				         	<div style="width: 30%;float: left;">Giờ đóng cửa:</div> 
				         	<div><input type="time" name="txtgiodc"  id="ctxtgiodc" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"/></div>
				         </p>
				         	
				         <p>
				         	<div style="width: 30%;float: left;">Giá thấp nhất:</div> 
				         	<div><input type="text" name="txtgiatn"  id="ctxtgiatn" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"/></div>
				         </p>
				         <p>
				         	<div style="width: 30%;float: left;">Giá cao nhất:</div> 
				         	<div><input type="text" name="txtgiacn"  id="ctxtgiacn" value="" style="border-radius: 0px;width: 380px; height: 38px; font-size: 15px;font-family: all;outline: none;box-sizing: border-box;"/></div>
				         </p>
				        <p><div style="width: 30%;float: left;">Mô tả:</div> <div><textarea name="txtmota" id="ctxtmota"  cols="30" rows="6" style="width: 65%"></textarea></div>
				        </p>
				        <p>
				        	<div style="width: 30%;float: left;">Hình ảnh:</div> 
				        	 <div class="form-group ">
							       <!--  <label class="col-sm-2" >Hình ảnh</label> -->
							        <span class="form_item">
							      <input type="file" name="newsImg" class="textbox" />
							    </span><br />
							 </div>
				        </p>
				       
				        <a href="#"><input type="submit" name="btnSaveNew" id="contact-submit" value="Send Now" class="readmore" style="margin-left: 600px" />
				        <img src="{{ asset('public/user/images/loading.gif') }}" id="contact-loader" alt="Loader" /></a>
				      
				   
				        <p>
				        <span class="w-pet-border"></span>
				        </p>
				        </form>
                
        
      </div>
      <!--  <div style="clear: both;"></div> -->

    </div>
      <!-- <div class="clearfix"></div> -->
     <div id="sidebar" style="margin-right: 200px;font-family:all;margin-right: 200px ">
     	 						<div class="widget">
								        <h4 class="blue">Address</h4>
								        <div class="type-post">
										<div class="blog-post-image">
											<div class="blog-post-image video-post-image"><iframe width="280" height="150" src="https://www.youtube.com/embed/TcGpoURP4nM" frameborder="0" gesture="media" allowfullscreen ></iframe> </div>
										</div>
										<div class="blog-post-background">
											<h2 class="post-title"><a href="blog-post.html">We now ship globally!</a></h2>
											<div class="post-details-meta">Posted on <a href="#">October 17, 2012</a> by <a href="#">mike</a></div>
											<div class="blog-post-excerpt">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu ligula eget lacus gravida lacinia ut at magna. Cras pellentesque eros in felis blandit eu ornare lorem porta. Cum sociis natoque penatibus et magnis dis parturient.</p>
											</div>
											<p><a href="blog-post.html" class="rock-button">Read more</a></p>
					</div><!-- close .blog-post-background -->
					
				<div class="clearfix"></div>
				</div><!-- close .type-post -->
						        </div>
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
     <div style="clear: both;"></div>
    </div><!-- close .width-container -->
  </div>
    <div style="clear: both;"></div>
    
    @endsection