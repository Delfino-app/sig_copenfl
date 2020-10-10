@extends('layout.template')

@section('titulo','Licença')

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
					    <a class="nav-link" data-toggle="tab" href="#menu1">Fotos</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#menu2">Documentos</a>
					  </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane active container" id="ficha">
					  	<div style="border:1px solid #444">
					  		@include('licenca.ficha')
					  	</div>
					  </div>
					  <div class="tab-pane container" id="menu1">...</div>
					  <div class="tab-pane container" id="menu2">...</div>
					</div>
				</div>
			</div>
			<!-- end col-10 -->
		</div>
		<!-- end row -->
	</div>
@endsection