<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'Thomas Nguyen');</title>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="styles.css">
		@yield('head')
	</head>
	<body>
		<!--
		<div class="jumbotron text-center"> 
			<p class="cursive">Thomas Nguyen</p>
			<p>Photo Gallery For Exposing Digital Photography Final Project</p>
		</div>
		-->
		<div class="container">
			@yield('content')
		</div>
		<footer class="footer-bg">
			<div class="container">
				<small> 
					Thomas Nguyen <br>
					thomasnguyen704@gmail.com <br>
					All photos on this site are property Thomas Nguyen. Any use of the photographs on this site is prohibited without consent.
				</small>
			</div>
		</footer>
		<!-- js -->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	</body>
</html>