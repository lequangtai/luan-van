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
				<a href="../../public/uploads/news/{!! $monantc['hinhanh'] !!}" rel="prettyPhoto"><img src="../../public/uploads/news/{!! $monantc['hinhanh'] !!}" alt="menu-item" style="width: 100%; height: 300px"></a>
			</div>
			
			<div class="grid2column lastcolumn">
				<div class="menu-item-container" style="font-size: 15px">
					<p style="font-size: 25px;width: 100%"><b>{!! $monantc['tenmonan'] !!}</b></pa>
						<p class="glyphicon glyphicon-map-marker" style="width: 100%"><a href="{!! url('chi-tiet-dia-diem/'.$diadiem['id'].'/'.$diadiem['slug'].'.html')!!}">{!! $diadiem['tendiadiem'] !!}</a></pa>
					<p class="glyphicon glyphicon-map-marker" style="width: 100%"><a href="#">{!! $diadiem['diachi'] !!}</a></pa>
					<p class="glyphicon glyphicon-link" style="width: 100%">{!! $monantc['dongia'] !!}VNĐ</pa>
						<div><p class="glyphicon glyphicon-list-alt"></pa>{!! $monantc['gioithieu'] !!}</div>

					

					
				</div>
			</div>

			<div class="clearfix"></div>
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
	<div id="main">
		<div class="width-container">
			
			<ul class="filter-children">
				<li><a type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Viết bình luận</a></li>
			</ul>
			@foreach($monan as $item)
			<div class="grid4column" style="height: 400px">
				<div class="portfolio-content-container aligncenter" style="height: 300px">
					<div class="item-portfolio-image">
						<a href="../../public/uploads/news/{!!$item["hinhanh"]!!}" rel="prettyPhoto[portfolio-gallery]" class="hover-icon">
						<img  src="../../public/uploads/news/{!!$item["hinhanh"]!!}" alt="portfolio-image" style="width: 100%; height: 180px" /></a>			
					</div>
					<div class="portfolio-post-background" style="height: 130px">
						<h4><a href="{{ route('getmenupost') }}">{!!$item["tenmonan"]!!}</a></h4>
						<p>{!!$item["gioithieu"]!!}</p>
					</div>
				</div><!-- close .content-container -->
			</div>
			@endforeach
			
			<!-- <div class="clearfix"></div> -->
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
    </div>
  </div>
  
</div>

@endsection