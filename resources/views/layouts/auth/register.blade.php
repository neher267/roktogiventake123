@extends('layouts.master')

@section('content')
<div class="contact">
	<div class="container">			
		<div class="contact-form">
			<h3>Registration</h3>
			@if(session('validation', 'no') == 'no')
			<div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 form-grids">
				<div class="input-group input-group-lg">
					<span class="input-group-addon" id="country_code">+880</span>
					<input  id="phone_number" type="text" class="form-control" placeholder="Mobile No">
				</div>
				<button class="btn btn-1 btn-1d" style="margin-bottom: 150px" onclick="smsLogin()">Verify</button>
			</div>

			<form id="login_success" method="post" action="{{ url('validation') }}">
				{{ csrf_field() }}
				<!-- <input id="csrf" type="hidden" name="csrf" />
			          <input id="code" type="hidden" name="code" /> -->
			          <input id="mobile" type="hidden" name="mobile">
			</form>
			<script>
			          function loginCallback(response) {
				           if (response.status === "PARTIALLY_AUTHENTICATED") 
				           {
				           	// document.getElementById("code").value = response.code;
					           // document.getElementById("csrf").value = response.state;
					           document.getElementById("mobile").value = document.getElementById("phone_number").value;
					           document.getElementById("login_success").submit();
				           }
			          }
			</script>
			@else	
		                
			<form action="{{ route('register.store') }}" method="post">
				{{ csrf_field() }}

				<div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 form-grids">
					<input type="text" name="name" placeholder="Name" required> 
					<select name="group_id" class="form-control1" required>
						<option value="">Blood Group</option>
						@foreach($groups as $group)
						<option value="{{ $group->id }}">{{$group->name}}</option>
						@endforeach 
					</select>
					<select name="register_as" class="form-control1" required>
						<option value="">Role</option>
						<option value="donate">Blood Donate</option>
						<option value="buy">Blood Buy</option>
					</select>

					<select name="city_id" class="form-control1" required>
						<option value="">City</option>
						@foreach($cities as $city)
						<option value="{{ $city->id }}">{{$city->name}}</option>
						@endforeach 
					</select>
					<input type="text" name="post_office" class="form-control1" required placeholder="Post Office">
					<input type="password" name="password" class="form-control1" placeholder="Password">
					<input type="password" name="password_comfirmation" class="form-control1" placeholder="Password Confirmation">

					<button class="btn btn-1 btn-1d"> Register </button>
				</div>				
				<div class="clearfix"></div>					
			</form>
			@endif
		</div>
	</div>		
</div>

<script>
          // initialize Account Kit with CSRF protection
         
         AccountKit_OnInteractive = function()
         {
         	AccountKit.init(
              {
                appId:"1991821631059766", 
                state: "csrf_field()", 
                version:"v2.11",
                fbAppEventsEnabled:true,
                redirect:"{{url('register.create')}}"
              }
            );
          };
         

          // phone form submission handler
          function smsLogin() {
          	var countryCode = document.getElementById("country_code").innerHTML;
            var phoneNumber = document.getElementById("phone_number").value;
            AccountKit.login(
              'PHONE', 
              {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
              loginCallback
            );
          }
</script> 
@endsection