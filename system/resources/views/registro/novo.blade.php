@extends('layout.template')

@section('titulo','Inscrever')
<link rel="stylesheet" href="{{asset('assets-login/css/customNovoProcesso.css')}}" type="text/css">
@section('conteudo')
	<div id="content" class="content content-form">
		<form action="{{route('prosesso.adicionar')}}" method="POST" name="form-wizard" class="form-control-with-bg">
			{{ csrf_field() }}
			<!-- begin wizard -->
			<div id="wizard">
				<!-- begin wizard-step -->
				<ul>
					<li class="bg-dark">
						<a href="#step-1">
							<span class="number">1</span> 
							<span class="info">
								Dados Pessoais
							</span>
						</a>
					</li>
					<li>
						<a href="#step-2">
							<span class="number">2</span> 
							<span class="info">
								Endereço
							</span>
						</a>
					</li>
					<li>
						<a href="#step-3">
							<span class="number">3</span>
							<span class="info">
								Trabalho
							</span>
						</a>
					</li>
					<li>
						<a href="#step-4">
							<span class="number">4</span> 
							<span class="info">
								Escola
							</span>
						</a>
					</li>
					<li>
						<a href="#step-5">
							<span class="number">5</span> 
							<span class="info">
								Conclusão
							</span>
						</a>
					</li>
				</ul>
				<!-- end wizard-step -->
				<!-- begin wizard-content -->
				<div>
					<!-- begin step-1 -->
					<div id="step-1">
						<!-- begin fieldset -->
						<fieldset style="padding-bottom:5px">
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Dados pessoais do Solicitante</legend>
									<!-- begin form-group -->
									<div class="row">
										<div class="form-group col-lg-4 col-sm-6">
											<label class="col-form-label">Nome Completo<span class="text-danger">*</span></label>
											<input type="text" name="dados_nome" placeholder="John" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Nome Completo(Pai)<span class="text-danger">*</span></label>
											<input type="text" name="dados_nome_pai" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Nome Completo(Mãe)<span class="text-danger">*</span></label>
											<input type="text" name="dados_nome_mae" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
										</div>
										<!--<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Nacionalidade<span class="text-danger">*</span></label>
											<input type="text" name="dados_nacionalidade" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
										</div>-->
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Data de Nascimento<span class="text-danger">&nbsp;</span></label>
											<input type="date" name="dados_nascimento" placeholder="Smith" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">País<span class="text-danger">*</span></label>
											<select class="form-control" name="dados_pais">
												<option value="1">Angola</option>
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Província<span class="text-danger">*</span></label>
											<select class="form-control" name="dados_provincia">
												@if(!empty($provincias))
													@foreach($provincias as $provincia)
														<option value="{{$provincia->id}}">
															{{$provincia->nome}}
														</option>
													@endforeach
												@endif
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Município<span class="text-danger">*</span></label>
											<select class="form-control" name="dados_municipio">
												@if(!empty($municipios))
													@foreach($municipios as $municipio)
														<option value="{{$municipio->id}}">
															{{$municipio->nome}}
														</option>
													@endforeach
												@endif
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Sexo<span class="text-danger">*</span></label>
											<select class="form-control" name="dados_sexo">
												<option>Masculino</option>
												<option>Femenino</option>
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Estado Civil<span class="text-danger">*</span></label>
											<select class="form-control" name="dados_estado_civil">
												<option>Solteiro(a)</option>
												<option>Casado(a)</option>
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">B.I nº<span class="text-danger">*</span></label>
											<input type="text" name="dados_bi" placeholder="Nº do Bilhete de Identidade" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
										</div>
									</div>
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</fieldset>
						<!-- end fieldset -->
					</div>
					<!-- end step-1 -->
					<!-- begin step-2 -->
					<div id="step-2">
						<!-- begin fieldset -->
						<fieldset>
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Endereço Actualizado da Residência</legend>
									<div class="row">
										<div class="form-group col-lg-4 col-sm-6">
											<label class="col-form-label">Rua<span class="text-danger">*</span></label>
											<input type="text" name="endereco_rua" placeholder="Rua" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Prédio</label>
											<input type="text" name="endereco_predio" placeholder="Prédio" data-parsley-group="step-2" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Aptº/Casa nº</label>
											<input type="text" name="endereco_casa" placeholder="Aptº/Casa nº" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Bairro</label>
											<input type="text" name="endereco_bairro" placeholder="Bairro" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Município<span class="text-danger">*</span></label>
											<select class="form-control" name="endereco_municipio">
												@if(!empty($municipios))
													@foreach($municipios as $municipio)
														<option value="{{$municipio->id}}">
															{{$municipio->nome}}
														</option>
													@endforeach
												@endif
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Província<span class="text-danger">*</span></label>
											<select class="form-control" name="endereco_provincia">
												@if(!empty($provincias))
													@foreach($provincias as $provincia)
														<option value="{{$provincia->id}}">
															{{$provincia->nome}}
														</option>
													@endforeach
												@endif
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Email<span class="text-danger">*</span></label>
											<input type="email" name="endereco_email" placeholder="Email" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Telefone 1<span class="text-danger">*</span></label>
											<input type="number" name="endereco_telefone_1" placeholder="Telefone 1" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Telefone 2<span class="text-danger">*</span></label>
											<input type="number" name="endereco_telefone_2" placeholder="Telefone 2" data-parsley-group="step-2" data-parsley-required="true" class="form-control" />
										</div>
									</div>
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</fieldset>
						<!-- end fieldset -->
					</div>
					<!-- end step-2 -->
					<!-- begin step-3 -->
					<div id="step-3">
						<!-- begin fieldset -->
						<fieldset>
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Endereço Actualizado do Local de Trabalho</legend>
									<div class="row">
										<div class="form-group col-lg-4 col-sm-6">
											<label class="col-form-label">Email<span class="text-danger">*</span></label>
											<input type="email" name="trabalho_email" placeholder="Email" data-parsley-group="step-3" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Telefone</label>
											<input type="number" name="trabalho_telefone" placeholder="Telefone" data-parsley-group="step-3" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Rua/Largo</label>
											<input type="text" name="trabalho_rua" placeholder="Rua/Largo" data-parsley-group="step-3" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Nº</label>
											<input type="number" name="trabalho_numero" placeholder="Rua nº" data-parsley-group="step-3" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Município<span class="text-danger">*</span></label>
											<select class="form-control" name="trabalho_municipio">
												@if(!empty($municipios))
													@foreach($municipios as $municipio)
														<option value="{{$municipio->id}}">
															{{$municipio->nome}}
														</option>
													@endforeach
												@endif
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Província<span class="text-danger">*</span></label>
											<select class="form-control" name="trabalho_provincia">
												@if(!empty($provincias))
													@foreach($provincias as $provincia)
														<option value="{{$provincia->id}}">
															{{$provincia->nome}}
														</option>
													@endforeach
												@endif
											</select>
										</div>
									</div>
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</fieldset>
						<!-- end fieldset -->
					</div>
					<!-- end step-3 -->
					<!-- begin step-3 -->
					<div id="step-4">
						<!-- begin fieldset -->
						<fieldset>
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Escola e Ano da última Formação em Enfermagem</legend>
									<div class="row">
										<div class="form-group col-lg-4 col-sm-6">
											<label class="col-form-label">Escola<span class="text-danger">*</span></label>
											<input type="text" name="escola_nome" placeholder="Nome da escola" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Ano da Formação</label>
											<select class="form-control" name="escola_ano_formacao">
												<option>2020</option>
											</select>
										</div>
										<div class="form-group col-lg-4 col-sm-6">
											<label class="text-lg-right col-form-label">Telefone</label>
											<input type="number" name="escola_telefone" placeholder="Telefone" data-parsley-group="step-4" data-parsley-required="true" class="form-control" />
										</div>
									</div>
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</fieldset>
						<!-- end fieldset -->
					</div>
					<!-- end step-4 -->
					<!-- begin step-5 -->
					<div id="step-5">
						<div class="jumbotron m-b-0 text-center">
							<h2 class="display-4" style="font-size:24px">Concluir registro</h2>
							<p class="lead mb-4" style="font-size:16px">Clique em registrar para concluir o registro</p>
							<button class="btn btn-primary" type="submit" style="font-size:18px">
								Registrar
							</button>
						</div>
					</div>
					<!-- end step-5 -->
				</div>
				<!-- end wizard-content -->
			</div>
			<!-- end wizard -->
		</form>
	</div>
@endsection
