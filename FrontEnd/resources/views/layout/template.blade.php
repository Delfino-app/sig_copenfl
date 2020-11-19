<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('titulo') | SIG - COPENFL</title>
		<link rel="icon" href="{{asset('img/logo.png')}}">
		<link rel="stylesheet" href="{{asset('assets-login/css/apple/app.min.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('assets-login/plugins/ionicons/css/ionicons.min.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
	</head>
	<body>
		
		<div id="page-loader" class="fade show"><span class="spinner"></span></div>
		
		<!-- begin #page-container -->
		<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<!--Menu-->
			@include('layout._includes.menu')

			<!--Aside--> 
			@include('layout._includes.aside')

			<!--Conteudo--> 
			@yield('conteudo')

			<!--Footer-->
			@include('layout._includes.footer')

			<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		</div>

		<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets-login/js/app.min.js')}}"></script>
		<script src="{{asset('assets-login/js/theme/apple.min.js')}}"></script> 
		@yield('add-js')
	</body>
</html>