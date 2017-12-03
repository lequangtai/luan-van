@extends('User.master')
	@section('title','Trang menu-post')
	@section('content')
	
	
	<div id="page-title">
		<div class="width-container paged-title">
			<h1>Roasted Apple Tart</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

	
	
	<div id="main">
		<div class="width-container">

			
			<div class="grid2column">
				<a href="{{ asset('public/user/images/demo/photodune-187464-white-wine-with-glasses-outside-l2-1140x550.jpg') }}" rel="prettyPhoto"><img src="{{ asset('public/user/images/demo/photodune-187464-white-wine-with-glasses-outside-l2-1140x550.jpg') }}" alt="menu-item"></a>
			</div>
			
			<div class="grid2column lastcolumn">
				<div class="menu-item-container">
					<p>You can choose to link to the menu item page if you want.  If so, you can provide additional information and a picture of the menu item like so.</pa>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper, purus et tincidunt pretium, augue leo viverra leo, at adipiscing diam mauris ornare metus. Donec est tellus, mattis a egestas nec, imperdiet nec metus.</pa>

					<p>Praesent euismod diam at dolor malesuada ac malesuada est mattis. Nam cursus, dui sed tristique elementum, odio mi convallis augue, quis cursus felis eros vitae libero. Cras non congue turpis. Nulla consectetur aliquam porta. In at neque non sapien ullamcorper semper.</pa>
				</div>
			</div>

			<div class="clearfix"></div>
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		@endsection