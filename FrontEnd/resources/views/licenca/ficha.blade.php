<link rel="stylesheet" href="{{asset('css/customFichaInscricao.css')}}" type="text/css">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-12 ficha-container">
			<div class="row">
				<div class="col-lg-12 ficha-content-col-12 ficha-heade">
					<div class="text-center ficha-top-content">
						<img width="50" src="{{asset('img/logo.png')}}">
						<p class="ficha-heade-top">
							<b>
								ORDENFA<br>
								ORDEM DE ENFERMAGEM DE ANGOLA
							</b><br>
							<span class="decreto">
								Decreto Presidencial nº 179/10
							</span>
							<br>
							<b>CONSELHO PROVINCIAL DA ORDEM DE ENFERMAGEM DE LUANDA</b>
						</p>
						<p class="heade-top-data">
							Ficha de inscrição Nº <span>1</span>/{{date('Y')}}
						</p>
					</div>
					<div class="float-right">
						<img class="ficha-heade-img" width="80" src="{{asset('img/default.jpg')}}">
					</div>
				</div>
				<!--Dados Pessoais-->
				<div class="col-lg-12 ficha-content-col-12">
					<h3 class="ficha-text-container row">
						<span class="col-lg-2">1. Nome Completo</span>
						<p class="col-lg-10">{{$licenca->nome}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-2">2. Filho (a) de: </span>
						<p class="col-lg-10">{{$licenca->nome_pai}}</p>
					</h3>
					<h3 class="ficha-text-container row">
						<span class="col-lg-2">E de: </span>
						<p class="col-lg-10">{{$licenca->nome_mae}}</p>
					</h3>
					<div class="row">
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>3. Data de Nascimento</span>
								<p class="row-p">{{$licenca->data_nascimento}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container row">
								<span>4. Município</span>
								<p class="row-p" style="width:70%">Luanda</p>
							</h3>
						</div>
						<div class="col-lg-4 row">
							<h3 class="ficha-text-container">
								<span>País</span>
								<p class="row-p" style="width:90%">Angola</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>5. Sexo</span>
								<p class="row-p" style="width:82%">{{$licenca->genero}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>6. Estado Civil</span>
								<p class="row-p" style="width:63%">{{$licenca->estado_civil}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>7. B.I nº</span>
								<p class="row-p" style="width:78%">{{$licenca->bi_passaport_num}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Data de Emissão</span>
								<p class="row-p" style="width:62%">{{$licenca->bi_emissao}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Data de Validade</span>
								<p class="row-p" style="width:56%">{{$licenca->bi_validade}}</p>
							</h3>
						</div>
					</div>
				</div>
				<!--Dados Endereco-->
				<div class="col-lg-12 ficha-content-col-12" style="margin-top:20px;">
					<h3 class="ficha-text-container row" style="padding-bottom:10px;">
						<span class="col-lg-12">8. Endereço Actualizado da Residência Comprovada:</span>
					</h3>
					<div class="row">
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Rua: </span>
								<p class="row-p" style="width:85%">{{$licenca->endereco->rua}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container row">
								<span>Prédio</span>
								<p class="row-p" style="width:80%">{{$licenca->endereco->predio}}</p>
							</h3>
						</div>
						<div class="col-lg-4 row">
							<h3 class="ficha-text-container">
								<span>Aptº/Casa nº</span>
								<p class="row-p" style="width:70%">{{$licenca->endereco->casa_num}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Bairro</span>
								<p class="row-p" style="width:82%">{{$licenca->endereco->bairro}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Município</span>
								<p class="row-p" style="width:70%">Município</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Província</span>
								<p class="row-p" style="width:75%">Província</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Telefone (1)</span>
								<p class="row-p" style="width:70%">{{$licenca->endereco->telefone_1}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Telefone (2)</span>
								<p class="row-p" style="width:65%">{{$licenca->endereco->telefone_2}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Email</span>
								<p class="row-p" style="width:82%">{{$licenca->endereco->email}}</p>
							</h3>
						</div>
					</div>
				</div>
				<!--Dados Endereco Trabalho-->
				<div class="col-lg-12 ficha-content-col-12" style="margin-top:20px;">
					<h3 class="ficha-text-container row" style="padding-bottom:10px;">
						<span class="col-lg-12">9. Endereço Actualizado do Local de Trabalho:</span>
					</h3>
					<div class="row">
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Telefone </span>
								<p class="row-p" style="width:75%">{{$licenca->empresa->telefone}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container row">
								<span>Email</span>
								<p class="row-p" style="width:83%">{{$licenca->empresa->email}}</p>
							</h3>
						</div>
						<div class="col-lg-4 row">
							<h3 class="ficha-text-container">
								<span>Fax</span>
								<p class="row-p" style="width:90%"></p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Rua/Largo</span>
								<p class="row-p" style="width:72%">{{$licenca->empresa->rua}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Nº</span>
								<p class="row-p" style="width:85%">{{$licenca->empresa->rua_num}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Município</span>
								<p class="row-p" style="width:73%">Município</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Província</span>
								<p class="row-p" style="width:75%">{{$licenca->endereco->telefone_1}}</p>
							</h3>
						</div>
					</div>
				</div>
				<!--Dados Escola-->
				<div class="col-lg-12 ficha-content-col-12" style="margin-top:20px;">
					<h3 class="ficha-text-container row" style="padding-bottom:10px;">
						<span class="col-lg-12">10. Escola e Ano da Última Formação em Enfermagem</span>
					</h3>
					<div class="row">
						<div class="col-lg-8">
							<h3 class="ficha-text-container">
								<span>Escola</span>
								<p class="row-p" style="width:75%">{{$licenca->escola->nome}}</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Ano de Formação</span>
								<p class="row-p" style="width:83%">uuyu</p>
							</h3>
						</div>
						<div class="col-lg-4">
							<h3 class="ficha-text-container">
								<span>Telefone</span>
								<p class="row-p" style="width:70%">{{$licenca->escola->telefone}}</p>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>