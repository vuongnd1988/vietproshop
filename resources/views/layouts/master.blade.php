<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title')
	</title>
</head>
<body>
	<!-- header -->
	<div style="background-color: yellow;">
		<p>Header</p>
	</div>
	<!-- sidebar -->
	<div style="background-color: red;">
		<p>Sidebar</p>
	</div>
		@yield('content')
	<!-- footer -->
	<div style="background-color: blue;">
		<p>Footer</p>
	</div>
</body>
</html>