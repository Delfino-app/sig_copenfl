<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Recibo de Inscrição | SIG - COPENFL</title>
	</head>
	<body>	
		<style>
			.content-recibo{

			border:1px solid #444;
			padding-left:40px;
			padding-right:40px;
			padding-bottom:80px;
			justify-content: center !important;
			align-items: center;
			
			}
			.heade-top-content{
				padding-top:20px;
			}
			.decreto{

				font-size:13px;
			font-style: italic;
			}
			.heade-top{

			font-size:14px;
			}

			.heade-top-data{

			font-size:14px;
			}

			.recibo-info{

			font-size:13px;
			}
			.functionario{

			text-align:center;
			}

			.ficha-text-container span{

			font-size:12px;
			color:#6d6969;
			}
			.ficha-text-container p{

			font-size:13px;
			color:#444;
			}
		</style>
		<!-- begin #page-container -->
		<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
			<div id="content" class="content">
				<div class="row">
					<div class="col-lg-12 content-recibo bg-white">
						<div class="text-center heade-top-content">
							<img width="50" src="">
							<p class="heade-top">
								Ordem dos enfermeiros de Angola<br>
								<span class="decreto">
								Decreto Presidencial nº 179/10</span><br>
								<b>Conselho Provincial de Luanda</b>
							</p>
							<p class="heade-top-data">
								Recibo de inscrição Provisório Nº <span></span>/{{date('Y')}}
							</p>
						</div>
						<div style="margin-top:-20px;padding-top:20px">
							<p class="recibo-info">
						   		Nome:
						   		<span style="font-size:13px">
						   			<b></b>
						   		</span>
						   		<br>
						   		Luanda <span style="font-size:13px">
						   			<b></b>
						   		</span>
					   		</p>
						</div>
						<div style="width:100%;margin-top:-10px;padding-bottom:50px;">
							<div class="float-left">
								<small>
									Obs: Este recibo tem a validade de 90 dias.
									Não é válido<br> em emprego e não é prorrogável.
								</small>
								<br>
								<small>
									Contactos:930461400/914594261
								</small>
							</div>
							<div class="float-right text-center">
								<span style="font-size:13px;text-align:center;">Funcionário e carimbo</span><br>
								<small style="text-align:center;font-size:14px;">
									<b></b>
								<small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>