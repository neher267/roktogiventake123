<div class="banner-text" style="background-color: wheat">	
	<h3 style="text-transform: uppercase;">WELCOME TO {{config('app.name')}}</h3> 
	@if($user = Sentinel::check())	
		@include('layouts.partials._new-post')
	@else
	<h5><i class="fa fa-phone" aria-hidden="true"></i> <span>+88 111 2222</span></h5>
	<h5><i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="email-link" href="mailto:example@mail.com">mail@example.com</a></h5>
	@endif 

</div>