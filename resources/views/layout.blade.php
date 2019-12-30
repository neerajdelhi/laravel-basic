<!DOCTYPE HTML>
<html lang="en">
<head>
<meta content="utf-8">
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<link rel="stylesheet" href="./css/app.css">
<title>acme</title>
</head>
<body>
	@include('inc.navbar')
	<div class="container">
	@if(Request::is('/'))
		@include('inc.showcase')
	@endif
<div class="row">
	<div class="col-md-8 col-lg-8">
		@yield('content')
	</div>
	<div class="col-md-4 col-lg-4">
		@include('inc.sidebar')
	</div>
	</div>
</div> 
<footer id="footer" class="text-center">
	<p>Copyrights 2019 &copy; acme</p>
</footer>
</body>
</html>