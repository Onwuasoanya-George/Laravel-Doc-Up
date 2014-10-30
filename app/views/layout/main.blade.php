<!DOCTYPE html>
<html>
	<head> 
		<title> Exmed </title>
	</head>
	<body>
		@include('layout.header')
		@include('layout.left_side_nav')
		
		@yield('content')

		@include('layout.footer')
	</body>

</html>