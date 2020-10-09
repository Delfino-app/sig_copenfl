@extends('layout.template')

@section('titulo','Cursos')

@section('conteudo')
	<div class="container">
		<div style="padding:20px">
			<h3 class="text-center">Editar Curso</h3>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<form method="post" enctype="multipart/form-data" action="{{ route('admin.cursos.atualizar',$registro->id) }}">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="put">
					@include('curso._form')
					<button class="btn btn-primary">
						Actaulizar
					</button>
				</form>
			</div>
		</div>
	</div>
@endsection