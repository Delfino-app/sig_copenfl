@extends('layout.template')

@section('titulo','Cursos')

@section('conteudo')
	<div class="container">
		<div style="padding:20px">
			<h3 class="text-center">Adicionar Curso</h3>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form method="post" enctype="multipart/form-data" action="{{ route('admin.cursos.salvar') }}">
					{{ csrf_field() }}

					@include('curso._form')

					<button class="btn btn-primary">
						Salvar
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection