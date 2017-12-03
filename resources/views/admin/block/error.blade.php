@if(count($errors)>0)
    <div class="alert alert-danger" id="dataTables-example">
       <ul style="text-decoration:none;">
            @foreach($errors->all() as $error)

           <li style="padding-right: 10px; text-decoration: none;"> <img src="{{ asset('public/user/images/error.png') }} " width="10px"; height="10px" />{!! $error !!}</li>
           @endforeach
       </ul>
    </div>
    @endif