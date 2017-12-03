@extends('User.master')
  @section('title','Trang bình luận')
  @section('content')
<!-- <head>
    <title>Login Form với CSS3 và jQuery</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/demo.css') }}" media="all" />
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
</head> -->
   <script src="{{ asset('public/user/js/jquery-1.8.0.min.js') }}"></script>
		<script src="{{ asset('public/user/js/select2.js') }}"></script>
		<script>
        $(document).ready(function() { 
            $("#states").select2({
                    placeholder: "Select a State",
                    allowClear: true
             }); 
        });
</script>
  <div id="page-title">
    <div class="width-container paged-title">
      <h1>Contact us</h1> 
    </div>
    <div id="page-title-divider"></div>
  </div><!-- #page-title -->
  <div class="clearfix"></div>


      
      <div class="grid2column lastcolumn" style="margin-left: 200px;width: 50%; float: left;">
        
        <h3 class="header-underline">Hãy Viết bình luận của mình</h3>
         <div id="content">
        <select style="width:600px;" id="states">
              
               	@foreach($data as $item)
                  
                   <a href="{!! url('binh-luan/'.$item['id'])!!}"><option value="{!! $item['id'] !!}">{!! $item['tendiadiem'] !!}</option></a>
                   @endforeach
            
              </select>
     </div>

   
   <div class="form">
     <span class="w-pet-border"></span>
				        
				        <form action="" method="POST" enctype="multipart/form-data"" id="contact-form">
				        	@include('Admin.block.error')
						@include('Admin.block.flash')
				        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        	
				       <div class="form-group">
				        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Tên món ă</label> -->
				        <div class="col-sm-9">
				          <input type="text" class="form-control" name="txtTitle" placeholder="Nhập tiêu đề" value="{!!old('txtTitle')!!}" style="width: 732px; height: 50px">
				        </div>
				      </div>
				       <div class="form-group">
			         <!--  <label class="col-sm-12 control-label">Nội Dung:</label> -->
			            <div class="col-sm-12">
			            <textarea name="txtnoidung" rows="5" class="textbox" value="{!!old('txtnoidung')!!}" placeholder="Nhập Nôi Dung" >
			            </textarea>
			              <script type="text/javascript">
			                var editor = CKEDITOR.replace('txtnoidung', {
			                  language:'vi',
			                  filebrowserImageBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Images',
			                  filebrowserFlashBrowseUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/ckfinder.html?Type=Flash',
			                  filebrowserImageUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			                  filebrowserFlashUploadUrl :'../../public/lv17_admin/templates/js/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

			                });
			              </script>
			          </div>
			       </div>
			       <p>
				        	<div style="width: 15%;float: left; padding-top: 20px; padding-left: 15px">Hình ảnh:</div> 
				        	 <div class="form-group ">
							       <!--  <label class="col-sm-2" >Hình ảnh</label> -->
							        <span class="form_item">
							      <input type="file" name="newsImg" class="textbox" style="padding-top: 20px" />
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