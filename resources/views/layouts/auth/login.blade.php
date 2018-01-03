@extends('layouts.master')

@section('content')
<div class="contact">
	<div class="container">			
		<div class="contact-form">
			<h3>Login</h3>
			<form action="{{ url('login') }}" method="POST">
				{{ csrf_field() }}
				<div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 form-grids">
					<input type="text" name="mobile" placeholder="Mobile" required>
					<input type="password" name="password" class="form-control1" placeholder="Password" required>
					<button class="btn btn-1 btn-1d"> Login </button>
				</div>				
				<div class="clearfix"> </div>					
			</form>
		</div>
	</div>		
</div>
@endsection