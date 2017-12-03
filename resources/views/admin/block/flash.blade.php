@if(Session::has('flash_level'))
	<div style="float: left;width: 40px;text-align: center;" id="dataTables-example"><img src="{{ asset('public/user/images/valid.png') }} " width="20px"; height="20px" /></div><div class="alert alert-danger" class ="{!!Session::get('flash_level')!!}" id="dataTables-example">
	{!!Session::get('flash_message')!!}
		
	</div>

@endif