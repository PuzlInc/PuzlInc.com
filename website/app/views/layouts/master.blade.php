<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
<div id="wrap">
	<nav>
		@include('partials.nav')
	</nav>
	@yield('content')
	<div id="push"></div>
</div>
<footer>
	@include('partials.footer')
</footer>
<div class="go-top hide-on-tablet hide-on-mobile"><i class="fa fa-chevron-up"></i></div>
</body>
</html>
