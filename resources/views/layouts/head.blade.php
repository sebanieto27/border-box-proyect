<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1,
			shrink-to-fit=no" name="viewport">
	<title>Aegis - Admin Dashboard Template</title>
	<!-- General CSS Files -->
	<link rel="stylesheet" href="{{asset ('assets/css/app.min.css')}}">
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset ('assets/css/components.css')}}">
	<!-- Custom style CSS -->
	<link rel="stylesheet" href="{{asset ('assets/css/custom.css')}}">
	<link rel='shortcut icon' type='image/x-icon' href="{{asset ('assets/img/favicon.ico')}}" />
</head>

<body>
	<div class="loader"></div>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			<div class="navbar-bg"></div>
			
			<!-- Main Content -->
      
      @yield('content')



		</div>
	</div>
	<!-- General JS Scripts -->
	<script src="{{asset ('assets/js/app.min.js')}}"></script>
	<!-- JS Libraies -->
	<script src="{{asset ('assets/bundles/chartjs/chart.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/jqvmap/dist/jquery.vmap.min.js')}}"></script>
	<script src="{{asset ('assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
	<script src="{{asset ('assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js')}}"></script>
	<!-- Page Specific JS File -->
	<script src="{{asset ('assets/js/page/index2.js')}}"></script>
	<script src="{{asset ('assets/js/page/todo.js')}}"></script>
	<!-- Template JS File -->
	<script src="{{asset ('assets/js/scripts.js')}}"></script>
	<!-- Custom JS File -->
	<script src="{{asset ('assets/js/custom.js')}}"></script>
</body>
