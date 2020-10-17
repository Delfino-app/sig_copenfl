@extends('layout.template')

@section('titulo','Licença')
<link rel="stylesheet" href="{{asset('css/recibo.css')}}" type="text/css">
@section('conteudo')
	<div id="content" class="content" style="margin-top:40px;">
		<div class="row">
			<!-- begin col-10 -->
			<div class="col-xl-12">
				<div>
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#ficha">
					    	Ficha de Inscrição
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#documentos">Documentos</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#pagamentos">Pagamentos</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#recibo">Recibo de Inscrição</a>
					  </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane active container" id="ficha">
					  		@include('licenca.fichaPreview')
					  </div>
					  <div class="tab-pane container" id="pagamentos">
					  		@include('licenca.fichaPagamentos')
					  </div>
					  <div class="tab-pane container" id="documentos">
					  		@include('licenca.fichaDocumentos')
					  </div>
					  <div class="tab-pane container" id="recibo">
							@include('licenca.fichaReciboAmostra')
					  </div>
					</div>
				</div>
			</div>
			<!-- end col-10 -->
		</div>
		<!-- end row -->
	</div>
@endsection