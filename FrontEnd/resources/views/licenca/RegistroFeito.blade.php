@extends('layout.template')

@section('titulo','Inscrição')
@section('conteudo')
<div id="content" class="content" style="margin-top:40px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12  bg-white">
				<div class="row justify-content-center">
					<div class="col-lg-7" style="padding-bottom:50px">
						<div class=" text-center" style="padding:20px;">
							<i class="ion-ios-checkmark-circle-outline" style="font-size:70px;color:#4CD964"></i>
							<h3 style="color:#444">Registro conluído com sucesso!</h3>
							<p style="font-size:15px;">
								A primeira etapa do registro foi concluída com sucesso, faltando apenas anexar os documentos.
							</p>
							<hr>
							<a class="btn btn-destaque" style="color:white" href="#">
								<i class="ion-md-attach" style="font-size:14px;padding-right:5px"></i>
								Anexar Documentos
							</a>
							<a target="_blank" href="#" class="btn btn-primary" style="color:white">
								<i class="ion-ios-list" style="font-size:14px;padding-right:5px"></i>
								Gerar Pré-Recibo
							</a>
							<a class="btn btn-dark" style="color:white" href="{{route('licenca.nova')}}">
								<i class="ion-ios-add-circle-outline" style="font-size:14px;padding-right:5px"></i>
								Novo Registro
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection