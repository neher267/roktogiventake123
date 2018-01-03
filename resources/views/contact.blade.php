@extends('layouts.master')

@section('content')
<div class="contact">
	<div class="container">				
		<div class="contact-grids">
			<div class="col-md-12 map">
				<h3>How to find us</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703692693!2d90.27923991057244!3d23.780573258035957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1514280412117" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
											
			<div class="clearfix"> </div>	
		</div>
		<div class="contact-form">
			<h3>Contact form</h3>
			<form action="#" method="post">
				<div class="col-md-6 col-sm-6 form-grids">
					<input type="text" name="Name" placeholder="Name" required=""> 
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" name="Telephone" placeholder="Telephone" required=""> 
				</div>
				<div class="col-md-6 col-sm-6 form-grids">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<button class="btn btn-1 btn-1d"> Submit </button>
				</div>
				<div class="clearfix"> </div>					
			</form>
		</div>
	</div>		
</div>
@endsection