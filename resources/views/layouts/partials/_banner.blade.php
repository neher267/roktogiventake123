<!-- banner -->
<div class="banner {{Request::is('/') ? '':'abt-bnr'}}">
	<!-- header -->		
	<div class="w3ls-header">
		<div class="container">	
			<div class="agile-logo">
				<h1><a href="{{url('/')}}">{{config('app.name')}}</a></h1>				
			</div>
			<div style="margin-left: 70%; margin-top: 25px; color: #e20000">
				@if($user = Sentinel::check())
				<h3>{{ $user->name }}</h3>
				@endif 
			</div>
			
			@include('layouts.partials._top-nav')	

		</div>	
		@if(!Request::is('/'))	
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
			<li class="breadcrumb-item active">{{ucfirst(Request::segment(1))}}</li>
		</ol>	
		@endif
	</div>
	<!-- //header -->
	@if(Request::is('/'))	
		@include('layouts.partials.banner-text')
	@endif

</div>
<!-- //banner -->