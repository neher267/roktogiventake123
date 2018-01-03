<!DOCTYPE html>
<html lang="en">
<head>
<title>{{config('app.name')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BloodBank, Blood" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link rel="stylesheet" href="{{asset('css/theme.css')}}">
<!-- //css -->
<!-- js -->
<script type="text/javascript" src="{{asset('js/theme.head.js')}}"></script>
<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<!-- //js -->

<!-- web fonts -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //web fonts -->
</head>
<body>
	@include('layouts.partials._banner')
	
	@yield('content')

	<!-- footer -->
	@include('layouts.partials._footer')
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- Bootstrap core JavaScript -->
    	<script src="{{asset('js/theme.foot.js')}}"> </script>
</body>
</html>