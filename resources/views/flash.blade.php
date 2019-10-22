<?php
	$sessions = ['success','warning','info','danger'];
?>

@foreach($sessions as $flash)
	@if(session()->has($flash))
		<div class="row">
            <div class="col-md-12">
                <div class="alert alert-{{$flash}} alert-dismissible fade show" role="alert">
                  <strong>{{ ucwords($flash) }}</strong>, {{ session()->get($flash) }}.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>      
        </div>
	@endif
@endforeach


