@extends('User.master')
	@section('title','Trang món ăn')
	@section('content')
	
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>Wine Menu</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">

			
			<div class="grid3column">
				<div class="menu-item-container">
					<a href="menu-post.html">
						<div class="grid3column">
							<img src="{{ asset('public/user/images/demo/photodune-1515451-wine-m-300x375.jpg') }}" alt="wine-menu" class="noborder">
						</div>
						<div class="grid3columnbig lastcolumn">
							<br>
							<h5 class="menu-item-header-wine">Pinot Noir</h5>
							<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
						
						</div>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
			
			<div class="grid3column">
				<div class="menu-item-container">
					<a href="menu-post.html">
						<div class="grid3column">
							<img src="{{ asset('public/user/images/demo/photodune-1515455-wine-m-300x375.jpg') }}" alt="wine-menu" class="noborder">
						</div>
						<div class="grid3columnbig lastcolumn">
							<br>
							<h5 class="menu-item-header-wine">Merlot</h5>
							<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
						
						</div>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
			
			
			<div class="grid3column lastcolumn">
				<div class="menu-item-container">
					<a href="menu-post.html">
						<div class="grid3column">
							<img src="{{ asset('public/user/images/demo/photodune-1930437-bottle-with-red-wine-and-glass-on-a-old-stone-m-300x375.jpg') }}" alt="wine-menu" class="noborder">
						</div>
						<div class="grid3columnbig lastcolumn">
							<br>
							<h5 class="menu-item-header-wine">Syrah</h5>
							<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
						
						</div>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
			
			
			<div class="grid3column">
				<div class="menu-item-container">
					<a href="menu-post.html">
						<div class="grid3column">
							<img src="{{ asset('public/user/images/demo/photodune-705463-champagner-m-300x375.jpg') }}" alt="wine-menu" class="noborder">
						</div>
						<div class="grid3columnbig lastcolumn">
							<br>
							<h5 class="menu-item-header-wine">Champagne</h5>
							<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
						
						</div>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
			
			<div class="grid3column">
				<div class="menu-item-container">
					<a href="menu-post.html">
						<div class="grid3column">
							<img src="{{ asset('public/user/images/demo/photodune-2717933-wine-bottles-l-300x375.jpg') }}" alt="wine-menu" class="noborder">
						</div>
						<div class="grid3columnbig lastcolumn">
							<br>
							<h5 class="menu-item-header-wine">Zinfandel</h5>
							<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
						
						</div>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>
			
			
			<div class="grid3column lastcolumn">
				<div class="menu-item-container">
					<a href="menu-post.html">
						<div class="grid3column">
							<img src="{{ asset('public/user/images/demo/photodune-490628-white-wine-bottle-m-300x375.jpg') }}" alt="wine-menu" class="noborder">
						</div>
						<div class="grid3columnbig lastcolumn">
							<br>
							<h5 class="menu-item-header-wine">Savignon Blanc</h5>
							<p>You can easily add a sample description of the wine glass in this spot.  You can also link to the post or remove the link. </p>
						
						</div>
						<div class="clearfix"></div>
					</a>
				</div>
			</div>

			<div class="clearfix"></div>
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		@endsection