@extends('layout.template')

@section('titulo','Inscrição')
@section('conteudo')
<div id="content" class="content" style="margin-top:40px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12  bg-white">
				<div class="row justify-content-center">
					<div class="col-lg-7" style="padding-bottom:50px">
						@if($statusPage)
							@include('adds.paginaIndisponivel')
						@else
						<div class="text-center" style="padding:20px;">
							<i class="ion-ios-checkmark-circle-outline" style="font-size:70px;color:#4CD964"></i>
							<h3 style="color:#444">{{$info}}</h3>
							<p style="font-size:15px;">
								A primeira etapa do registro foi concluída com sucesso, faltando apenas anexar os documentos e fazer os pagamentos.
							</p>
							<hr>
							<a target="_blank" href="{{route('recibo',$id)}}" class="btn btn-destaque" style="color:white">
								Gerar Pré-Recibo
								<i class="ion-ios-list" style="font-size:14px;padding-left:5px"></i>
							</a>
							<a class="btn btn-primary" style="color:white" href="{{route('registro.etapa.final.licenca',$id)}}">
								Próxima Etapa
								<i class=" fa fa-angle-right" style="font-size:14px;padding-left:5px"></i>
							</a>
						</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection