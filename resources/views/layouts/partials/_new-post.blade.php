<div style="margin-top: 25px">
	<h2>Send a post</h2>
	<form action="{{ route('posts.store') }}" method="post">
		{{ csrf_field() }}
		<div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 form-grids">			
				
				<select name="register_as" class="form-control1" required onchange="change(value)">
					<option value="">Role</option>
					<option value="{{ $user->roles()->first()->slug }}">Blood {{ $user->roles()->first()->slug }}</option>
				</select>
				<p id="donate" style="font-style: italic; color: red; display: none">Donate bood</p>
				<p id="buy" style="font-style: italic; color: red; display: none;">Need bood</p>				

				<div class="checkbox">
					<label><input type="checkbox" required>I read This<a target="_blank" href="{{ url('terms-and-contition') }}"> terms and condition</a>.</label>
				</div>

				<button class="btn btn-1 btn-1d"> Post </button>
			</div>				
			<div class="clearfix"></div>	
	</form>
</div>
<script>
	function change(id)
	{
		document.getElementById(id).style.display = "";		
	}
</script>