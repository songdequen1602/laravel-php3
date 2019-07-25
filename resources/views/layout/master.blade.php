<!DOCTYPE html>
<html>
<head>
	<title>PT13312- @yield('title')</title>
	<style type="text/css">
	header{
		height: 100px;
		background-color: red;
	}
	footer{
		height: 100px;
		background-color: yellow;
	}
	</style>
</head>
<body>
	<header>header</header>
	<ul>
		<li>
			1
		</li>
		<li>
			2
		</li>
		<li>
			3
		</li>
		<li>
			4
		</li>
	</ul>
	<h1>Table @yield('table_name')</h1>
	<div>
		@yield('content')
	</div>
	@yield('custom')
	<footer>footer</footer>
</body>
</html>