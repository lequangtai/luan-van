@extends('User.master')
	@section('title','Trang món ăn')
	@section('content')
	
	<div id="page-title">
		<div class="width-container paged-title">
			<!-- <h1>Portfolio 4 Column</h1>	 -->
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	<div id="main">
		<div class="width-container">
			
			
			<div class="grid2column">
				<a href="../../public/uploads/news/{!! $diadiem['hinhanh'] !!}" rel="prettyPhoto"><img src="../../public/uploads/news/{!! $diadiem['hinhanh'] !!}" alt="menu-item" style="width: 100%; height: 300px"></a>
			</div>
			
			<div class="grid2column lastcolumn">
				<div class="menu-item-container" style="font-size: 15px">
					<p style="font-size: 25px;width: 100%"><b>{!! $diadiem['tendiadiem'] !!}</b></pa>
					<p class="glyphicon glyphicon-map-marker" style="width: 100%">{!! $diadiem['diachi'] !!}</pa>

					<p class="glyphicon glyphicon-time" style="width: 100%">{!! $diadiem['giomocua'] !!} | {!! $diadiem['giodongcua'] !!}</pa>

					<p class="glyphicon glyphicon-tag" style="width: 100%">{!! $diadiem['giathapnhat'] !!} - {!! $diadiem['giacaonhat'] !!}</pa>
					<p class="glyphicon glyphicon-list-alt" style="width: 100%">{!! $diadiem['mota'] !!}</pa>
				</div>
			</div>

			<div class="clearfix"></div>
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	<div id="main">
		<div class="width-container">
			
			<!-- <ul class="filter-children">
				<li><a type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Viết bình luận</a></li>
			</ul> -->
			@foreach($ddma as $item)
			<div class="grid4column">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a href="../../public/uploads/news/{!!$item["hinhanh"]!!}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="../../public/uploads/news/{!!$item["hinhanh"]!!}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a href="{!! url('chi-tiet-mon-an/'.$item['id'].'/'.$item['slug'].'.html')!!}">{!!$item["tenmonan"]!!}</a></h4>
						<p>{!!$item["gioithieu"]!!}</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			@endforeach
			
			<!-- <div class="clearfix"></div> -->
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		<div class="container" style="float: left;width: 40%;margin-left: 180px">
			<h4>Comment</h4>
			@include('Admin.block.error')
			@include('Admin.block.flash')
			<div style="border: 1px solid #DAD9D9">
			
			@foreach($users as $us)
			@foreach($binhluan as $bl)
			@if($us['id']==$bl['users_id'])
			<div style="height: auto; border:1px solid #DAD9D9;padding-bottom: 10px; font-family: all;">
				<div style="float: right;padding-top: 0px; font-size: 10px;color:#DAD9D9 "><a href="{!!route('getbinhluanDel', ['id'=>$bl["id"]])!!}" onclick = "return xacnhanxoa ('Bạn có muốn xóa không?')">Xóa</a></div>
				<div style="float: left;"><img src="../../public/uploads/news/{!! $us['hinhanh'] !!}" alt="" style="border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;;width: 40px;height: 40px; margin:0px 10px 0px 0px  "></div>
				<div style="font-size: 17px">{{$us['tenusers']}}</div>
				<div style="font-size: 10px"><i>{{$bl['created_at']}}</i></div>
				<div style="font-size: 15px">{{$bl['noidung']}}</div>

			</div>
			
			
			@endif
			@endforeach
			@endforeach
			
			
			
			
			
			
			</div>
		</div>
		
			<div class="container" style="background-color: red;width: 10%;height: 200px; float: right;margin-right: 190px">
				<h4>Đánh giá</h4>

			</div>
		<div style="clear: both;"></div>
		<div class="container" style="padding-top: 20px">
			 @if(Auth::check())
			 <h4><i>Viết bình luận...</i></h4>
			<form action="{!! url('binh-luan/'.$diadiem['id'])!!}" method="POST" enctype="multipart/form-data"" id="contact-form">
				  
				        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        	
				       
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
			      
				        <div style="float: right;">
				        	<a href="#"><input type="submit" name="btnSaveNew" id="contact-submit" value="Message" class="readmore"/>
				        <img src="{{ asset('public/user/images/loading.gif') }}" id="contact-loader" alt="Loader" /></a>
				        </div>
				        
				       
				        
				      
				   
				       
				        </form>
				        @endif
		</div>
		
		

	

<div class="container" style="height: 300px">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Viết bình luận</h4>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data"" id="contact-form">
				        	@include('Admin.block.error')
						@include('Admin.block.flash')
				        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        	
				       <div class="form-group">
				        <!-- <label for="inputEmail3" class="col-sm-2 control-label">Tên món ă</label> -->
				        <div class="col-sm-12">
				          <input type="text" class="form-control" name="txtTitle" placeholder="Nhập tiêu đề" value="{!!old('txtTitle')!!}">
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
				        
				       
				        
				      
				   
				       
				        </form>
                
        </div>
        <div class="modal-footer">
        	<a href="#"><input type="submit" name="btnSaveNew" id="contact-submit" value="Send Now" class="readmore"/>
				        <img src="{{ asset('public/user/images/loading.gif') }}" id="contact-loader" alt="Loader" /></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

@endsection