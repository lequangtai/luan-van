
	@extends('User.master')
	@section('title','Trang About us')
	@section('content')
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>About us</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">
			
			<div class="grid2column">
				<img src="{{ asset('public/user/images/demo/sample-image1.jpg') }}" alt="about-us">
			</div>
			<div class="grid2column lastcolumn">
				<br><br>
				<h3>Since 1983</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porttitor ante. Ut sit amet gravida justo. Sed ipsum nibh, tempor at porta et, aliquam et dolor. Cras eget est tempor odio molestie ultricies. Donec gravida libero at metus tincidunt sit amet lobortis sapien auctor.</p>

				<p>Vivamus sem turpis, hendrerit vel venenatis nec, adipiscing lacinia est. Nam molestie risus et diam volutpat blandit. Donec condimentum mi non ipsum fringilla nec aliquet est commodo. Vivamus cursus convallis purus quis molestie. Pellentesque in sem non purus imperdiet pulvinar.</p>
			</div>
			<div class="clearfix"></div>
			
			
			<div class="grid2column">
				<br><br>
				<h3>Chef Välimäki</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porttitor ante. Ut sit amet gravida justo. Sed ipsum nibh, tempor at porta et, aliquam et dolor. Cras eget est tempor odio molestie ultricies. Donec gravida libero at metus tincidunt sit amet lobortis sapien auctor.</p>

				<p>Vivamus sem turpis, hendrerit vel venenatis nec, adipiscing lacinia est. Nam molestie risus et diam volutpat blandit. Donec condimentum mi non ipsum fringilla nec aliquet est commodo. Vivamus cursus convallis purus quis molestie. Pellentesque in sem non purus imperdiet pulvinar.</p>
			</div>
			
			<div class="grid2column lastcolumn">
				<img src="{{ asset('public/user/images/demo/sample-image2.jpg') }}" alt="about-us">
			</div>
			<div class="clearfix"></div>
			
			
			
			<div class="grid2column">
				<img src="{{ asset('public/user/images/demo/sample-image3.jpg') }}" alt="about-us">
			</div>
			<div class="grid2column lastcolumn">
				<br><br>
				<h3>Award winning menu</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae porttitor ante. Ut sit amet gravida justo. Sed ipsum nibh, tempor at porta et, aliquam et dolor. Cras eget est tempor odio molestie ultricies. Donec gravida libero at metus tincidunt sit amet lobortis sapien auctor.</p>

				<p>Vivamus sem turpis, hendrerit vel venenatis nec, adipiscing lacinia est. Nam molestie risus et diam volutpat blandit. Donec condimentum mi non ipsum fringilla nec aliquet est commodo. Vivamus cursus convallis purus quis molestie. Pellentesque in sem non purus imperdiet pulvinar.</p>
			</div>
			<div class="clearfix"></div>
			
			
			
			
		
		
		
	</div><!-- close #main -->
	
	@endsection