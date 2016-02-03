@extends('nav')
@section('content')
<html>
<head>
	<title>USeP Dormitel</title>
</head>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style type="text/css">
	/* Wa nakoy paki sa stucture. Dinalian nani nga practice. LOL */
	body {
		margin: 0;
		padding: 0;
		font-family: 'Lato', sans-serif;
	}
	.hero {
		height: 100vh;
		background-color: maroon;
		position: relative;
		overflow: hidden;
	}
	.content {
		padding: 50px 230px;
		text-align: center;
		height: 100vh;
		position: relative;
		overflow: hidden;
	}
	.filler {
		height: 100px;
		background-color: maroon;
	}
	.logo {
		background: url('images/logo.png');
		background-size: auto 300px;
		background-repeat: no-repeat;
		background-position: top center;
		position: absolute;
		height: 300px;
		width: 100%;
		bottom: 50%;
		margin-top: -150px;
	}
	.description {
		font-weight: bold;
	    text-transform: uppercase;
	    font-size: 80px;
	    text-align: center;
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    margin-left: -475px;
	    margin-top: 50px;
	    width: 950px;
	    border: 5px solid rgba(255,255,255,0.8);
	    color: rgba(255,255,255,0.8);
	    padding: 10px 50px;
	}

</style>

<body>
	@yield('tummy')
	<!--footer start here-->
	<div class="filler">
			<h1 align="center">FOOTER</h1>	
	</div>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
	<script type="text/javascript">
		$(window).scroll(function() {
			var scroll = $(this).scrollTop();
			$('.logo').css({
				'transform': 'translate(0px, ' + scroll/2 + '%)'
			});

			$('.description').css({
				'transform': 'translate(0px, ' + scroll/8 + '%)'
			});

			var toShowCertified = scroll >= 200;
			var certifiedVisibility = toShowCertified ? 'visible' : 'hidden';
			var certifiedOpacity = toShowCertified ? 1 : 0;
		});
	</script>
</body>
</html>
@stop