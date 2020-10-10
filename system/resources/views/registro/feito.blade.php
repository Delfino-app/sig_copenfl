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
							<p style="font-size:15px;">O registro foi adicionado com sucesso à lista de Licenças. Podes gerar o recibo para posterior impreensão.</p>
							<hr>
							<a class="btn btn-dark" style="color:white" href="{{route('processos.novo')}}">
								<i class="ion-ios-add-circle-outline" style="font-size:14px;padding-right:5px"></i>
								Novo Registro
							</a>
							<a target="_blank" href="{{route('processo.recibo',$id)}}" class="btn btn-primary" style="color:white">
								<i class="ion-ios-list" style="font-size:14px;padding-right:5px"></i>
								Gerar recibo
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection