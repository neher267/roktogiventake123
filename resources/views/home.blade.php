@extends('layouts.master')

@section('content')
<!-- banner-bottom -->
	<div class="banner-bottom" id="banner-bottom">
		<div class="container">	
			<h3 class="w3l-title">About {{config('app.name')}}</h3>
			<p class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
			<div class="bottom-grids">
				<div class="col-md-4 bttm-grids-info">
					<h5>Lorem Ipsum simply random</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="col-md-4 bttm-grids-info">
					<h5>Simply random Lorem Ipsum </h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="col-md-4 bttm-grids-info">
					<h5>Ipsum Lorem simply random</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	
	<!-- services -->
	@include('layouts.partials._services')
	<!-- //services --> 
@endsection