<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<title>Login | SIG - COPENFL</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="Sistema Integrado de Gestão do Conselho Provincial da Ordem dos Enfermeiros de Luanda" name="description" />
	<meta content="Nova Dev" name="author" />
	
	<link rel="stylesheet" href="{{asset('assets-login/css/apple/app.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets-login/plugins/ionicons/css/ionicons.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets-login/css/customLogin.css')}}" type="text/css">
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url({{asset('img/padrao.jpg')}})"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>SIG</b> - COPENFL</h4>
					<p>
						Sistema Integrado de Gestão do Conselho Provincial da Ordem de Enfermagem de Luanda
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<b>SIG</b>-COPENFL
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-content -->
				<div class="login-content">
                    @if(isset($mensagem))
						<div class="alert alert-danger">
						  <strong>{{$mensagem['info']}}</strong> {{$mensagem['sms']}}
						</div>
					@endif
					<form action="" method="Post" class="margin-bottom-0 frmLogin">
                        <small>Insira seus dados de acesso</small>
						{{ csrf_field() }}
						<div class="form-group m-b-15">
							<label>Email</label>
							<input type="text" class="form-control form-control-lg input-login" name="email_login" placeholder="Email" required />
						</div>
						<div class="form-group m-b-15">
							<label>Senha</label>
							<input type="password" class="form-control form-control-lg input-login" name="senha_login" placeholder="Senha" required />
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-login">
								Entrar
								<i class="fa fa-sign-in"></i>
							</button>
						</div>
						<!--<div class="m-t-20 m-b-40 p-b-40 text-inverse">
							Esqueceu a senha? Clique <a href="register_v3.html">aqui</a>.
						</div>-->
						<hr />
						<p class="text-center text-grey-darker mb-0 text-copy">
							SIG-COPENFL&copy;2019
						</p>
					</form>
				</div>
				<!-- Fim login-content -->
			</div>
			<!-- Fim right-container -->
		</div>
		<!-- Fim login -->
	</div>
	<!-- Fim page container -->
	<script src="{{asset('assets-login/js/app.min.js')}}"></script>
	<script src="{{asset('assets-login/js/theme/apple.min.js')}}"></script>
</body>
</html>
