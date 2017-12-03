@extends('User.master')
@section('title','Trang Chủ')
@section('content')


<div id="page-title">
	@php
				$slide=App\Models\slidebar::select()->get()->toArray();
			@endphp
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		
		<ol class="carousel-indicators">
			@foreach($slide as $item)
			<li data-target="#carousel-id" data-slide-to="{!!$item["id"]!!}" class=""></li>
			<!-- <li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li> -->
			@endforeach	
		</ol>
		
		<div class="carousel-inner">
			
			@foreach($slide as $item)
			<div class="item">
				<img  alt="{!!$item["id"]!!}" src="public/uploads/news/{!!$item["tenslidebar"]!!}" style="width: 100%; height: 700px">
			</div>
			@endforeach	
			<div class="item">
				<img alt="Second slide" src="{{ asset('public/user/images/demo/slide2.jpg') }}">
			</div>
			<div class="item active">
				<img alt="Third slide" src="{{ asset('public/user/images/demo/slide3.jpg') }}">
			</div>

		</div>
		
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		
	</div>
		
	<div id="main">
		 @include('Admin.block.error')
 		@include('Admin.block.flash')
		<div class="width-container">
			
            @foreach($diadiem as $item)
			<div class="grid3column">
				<h3 style="font-family: all;">{{ $item["tendiadiem"] }}</h3>
				<a href="{!! url('chi-tiet-dia-diem/'.$item['id'].'/'.$item['slug'].'.html')!!}"><img src="public/uploads/news/{!!$item["hinhanh"]!!}" alt="slide" class="aligncenter" width="100%"; height="100px"></a>
				<p style="font-family: all;font-size: 17px;">{{ $item["diachi"] }}</p>
				<p style="font-family: all">{{ $item["mota"] }}</p>
				<!-- <p><a href="{!! url('chi-tiet-dia-diem/'.$item['id'])!!}" class="rock-button">Read about us</a></p> -->
			</div>
			@endforeach
			<div class="clearfix"></div>
			
			  <div style="text-align: center;">{!!$diadiem->links()!!}</div>
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		
		
		
	</div><!-- close #main -->
	@endsection
