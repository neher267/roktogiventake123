<div class="top-nav">
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<h3>Menu</h3>
		<a href="{{url('/')}}" class="active">Home</a>
		
		@if($user = Sentinel::check())
			<a href="{{route('profile.index')}}" class="active">Profile</a>
			<a href="{{route('posts.create')}}">New Post</a>
			<a href="#"
                                            onclick="event.preventDefault(); 
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                </a>

                                <form id="logout-form" action="{{ url('logout' )}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
			
		@else
			<a href="{{url('login')}}">Login</a>
			<a href="{{ route('register.create') }}" class="active">Registration</a>
		@endif 
		
		<a href="#">About us</a>
		<a href="#" class="menu-icon">Services <i class="fa fa-sort-down"></i></a>
			<ul class="nav1">
				<li><a href="#">Service 1</a></li>
				<li><a href="#">Service 2</a></li> 
			</ul> 	 
		<a href="{{url('contact')}}">Contact Us</a>
	</nav>  
	<div class="main buttonset">	
		<!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
		<button id="showRightPush"><img src="{{asset('images/menu-icon.png')}}" alt=""/></button>
		<!-- <span class="menu"></span> -->
	</div>
	<!-- script-for-drop down -->
	<script>
		$( "a.menu-icon" ).click(function() { 
			$( "ul.nav1" ).slideToggle( 300, function() {
				// Animation complete.
			});
		});
	</script>
	<!-- //script-for-dropdown --> 
	<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
	<script src="{{asset('js/classie.js')}}"></script>
	<script>
		var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		showRightPush = document.getElementById( 'showRightPush' ),
		body = document.body;

		showRightPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'cbp-spmenu-push-toleft' );
			classie.toggle( menuRight, 'cbp-spmenu-open' );
			disableOther( 'showRightPush' );
		};

		function disableOther( button ) {
			if( button !== 'showRightPush' ) {
				classie.toggle( showRightPush, 'disabled' );
			}
		}
	</script>
	<!-- /script-for-menu -->
</div>