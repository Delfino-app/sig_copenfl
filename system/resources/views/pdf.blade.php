<!DOCTYPE html>
<html>
<head>
	<title>PDF</title>
</head>
<body>
	@foreach($municipios as $municipio)
		<h4>Id:</h4>{{$municipio->id}}
		<h4>Nome:</h4>{{$municipio->nome}}
		<hr>
	@endforeach
</body>
</html>