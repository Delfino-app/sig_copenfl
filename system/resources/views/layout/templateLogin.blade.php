<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('titulo') | SIG-COPENFL</title>

		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
	</head>
	<body>
		<!--Conteudo--> 
		@yield('conteudo')

		<!--Footer-->
		@include('layout._includes.footer')

		<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	</body>
</html>