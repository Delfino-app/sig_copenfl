@extends('layout.template')

@section('titulo','Nova Licença')
<link href="{{asset('assets-login/plugins/smartwizard/dist/css/smart_wizard.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets-login/css/customNovoProcesso.css')}}" type="text/css">
@section('conteudo')
	<div id="content" class="content content-form">
		<form action="" id="frmPostLicenca" method="POST" name="form-wizard" class="form-control-with-bg">
			<input type="hidden" name="recividToken"  id="recividToken" value="{{$token}}">
			{{ csrf_field() }}
			<!-- begin wizard -->
			<div id="wizard">
				<!-- begin wizard-step -->
				<ul>
					<li class="bg-dark">
						<a href="#step-1">
							<span class="number">1</span> 
							<span class="info" style="font-size:12px !important">
								Dados Pessoais
							</span>
						</a>
					</li>
					<li>
						<a href="#step-2">
							<span class="number">2</span> 
							<span class="info" style="font-size:12px !important">
								Itentificação
							</span>
						</a>
					</li>
					<li>
						<a href="#step-3">
							<span class="number">3</span> 
							<span class="info" style="font-size:12px !important">
								Endereço
							</span>
						</a>
					</li>
					<li>
						<a href="#step-4">
							<span class="number">4</span>
							<span class="info" style="font-size:12px !important">
								Trabalho
							</span>
						</a>
					</li>
					<li>
						<a href="#step-5">
							<span class="number">5</span> 
							<span class="info" style="font-size:12px !important">
								Escola
							</span>
						</a>
					</li>
					<li>
						<a href="#step-6">
							<span class="number">6</span> 
							<span class="info" style="font-size:12px !important">
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
									@include('licenca.forms.frm_dadosPessoais')
								</div>
							</div>
						</fieldset>
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
									@include('licenca.forms.frm_addItentificacao')
								</div>
							</div>
						</fieldset>
					</div>
					<!-- end step-2 -->
					<!-- begin step-2 -->
					<div id="step-3">
						<!-- begin fieldset -->
						<fieldset>
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									@include('licenca.forms.frm_enderecoPessoal')
								</div>
							</div>
						</fieldset>
					</div>
					<!-- end step-2 -->
					<!-- begin step-3 -->
					<div id="step-4">
						<!-- begin fieldset -->
						<fieldset>
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									@include('licenca.forms.frm_dadosTrabalho')
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</fieldset>
						<!-- end fieldset -->
					</div>
					<!-- end step-3 -->
					<!-- begin step-3 -->
					<div id="step-5">
						<!-- begin fieldset -->
						<fieldset>
							<!-- begin row -->
							<div class="row">
								<!-- begin col-8 -->
								<div class="col-xl-12">
									<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Escola e Ano da última Formação em Enfermagem</legend>
									@include('licenca.forms.frm_dadosEscola')
								</div>
								<!-- end col-8 -->
							</div>
							<!-- end row -->
						</fieldset>
						<!-- end fieldset -->
					</div>
					<!-- end step-4 -->
					<!-- begin step-5 -->
					<div id="step-6">
						<div class="text-center addLicencaGifContainer" id="addLicencaGifContainer" hidden>
							<img id="img-gif" src="{{asset('img/ajax-loader.gif')}}">
							<p>Aguarde...</p>
						</div>
						<div class="jumbotron m-b-0 text-center" id="submitLicencaGifContainer" style="background-color:white">
							<h2 class="display-4" style="font-size:18px;font-weight:500">
								Concluir registro
							</h2>
							<p class="lead mb-4" style="font-size:16px;">
								Clique em Salvar registro para concluir o registro
							</p>
							<button class="btn btn-primary" type="submit">
								Salvar registro <i class="fa fa-save"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection
@section('add-js')
<script src="{{asset('assets-login/plugins/parsleyjs/dist/parsley.js')}}"></script>
<script src="{{asset('assets-login/plugins/smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
<script src="{{asset('assets-login/js/demo/form-wizards-validation.demo.js')}}"></script>
<script src="{{asset('js/AddLicencas/index.js')}}" type="module"></script>
@endsection
