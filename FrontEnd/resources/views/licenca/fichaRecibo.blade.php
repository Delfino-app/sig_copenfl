<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Recibo de Inscrição | SIG - COPENFL</title>
		<link rel="icon" href="{{asset('img/logo.png')}}">
		<link rel="stylesheet" href="{{asset('assets-login/css/apple/app.min.css')}}" type="text/css">
		<link rel="stylesheet" href="{{asset('css/recibo.css')}}" type="text/css">
	</head>
	<body>	
		<div class="row">
			<div class="col-lg-12 content-recibo bg-white" style="padding:20px;">
				<div class="text-center heade-top-content">
					<img width="50" src="{{asset('img/logo.png')}}">
					<p class="heade-top">
						Ordem de Enfermagem de Angola<br>
						<span class="decreto">
						Decreto Presidencial nº 179/10</span><br>
						<b>Conselho Provincial de Luanda</b>
					</p>
					@if(!empty($candidato))
					<p class="heade-top-data">
						Recibo de inscrição Provisório Nº <span>{{$candidato->id}}</span>/{{date('Y')}}
					</p>
					@endif
				</div>
				<div style="margin-top:-20px;padding-top:20px">
					@if(!empty($candidato))
					<p class="recibo-info">
						Nome:
						<span style="font-size:12px">
							<b>{{$candidato->nome}}</b>
						</span>
						<br>
						Luanda <span style="font-size:12px">
							<b>{{date('d/m/Y')}}</b>
						</span>
					</p>
					@endif
				</div>
				<div style="width:100%;margin-top:-10px;padding-bottom:50px;">
					<div class="float-left">
						<small>
							Obs: Este recibo tem a validade de 90 dias.
							Não é válido<br> em emprego e não é prorrogável.
						</small>
						<br>
						<small>
							Contactos: 930461400/914594261
						</small>
					</div>
					<div class="float-right text-center">
						<span style="font-size:13px;text-align:center;">Funcionário e carimbo</span><br>
						<small style="text-align:center;font-size:13px;">
							<b>Delfino Torres</b>
						<small>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>