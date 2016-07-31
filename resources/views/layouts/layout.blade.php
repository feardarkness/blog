<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="{{elixir('css/app.css')}}">
	@yield('css-header')
	@yield('js-header')
</head>
<body>
	<div class="container">
		<div class="row">
			@yield('content')	
		</div>
	</div>
	@yield('footer')
</body>
</html>