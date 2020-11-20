@extends('layout.template')

@section('titulo','Recibo de Inscrição')
<link rel="stylesheet" href="{{asset('css/recibo.css')}}" type="text/css">
@section('conteudo')
	<div id="content" class="content" style="margin-top:40px;">
		<div class="row">
			<!-- begin col-10 -->
			<div class="col-xl-12 p-20 bg-white">
				<div class="p-10">
					@include('licenca.fichaReciboAmostra')
				</div>
			</div>
			<!-- end col-10 -->
		</div>
		<!-- end row -->
	</div>
@endsection
@section('add-js')

@endsection