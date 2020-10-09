@extends('layout.template')

@section('titulo','Cursos')

@section('conteudo')
	<div class="container">
		<div style="padding:20px">
			<h3 class="text-center">Lista de Cursos</h3>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>Id</th>
				        <th>Imagem</th>
				        <th>Título</th>
				        <th>Descricao</th>
				        <th>Preço</th>
				        <th>Publicado</th>
				        <th>Ação</th>
				      </tr>
				    </thead>
				    <tbody>
				    	@foreach($cursos as $curso)
					      <tr>
					        <td>{{$curso->id}}</td>
					        <td><img width="50" src="{{asset($curso->imagem)}}"></td>
					        <td>{{$curso->titulo}}</td>
					        <td>{{$curso->descricao}}</td>
					        <td>{{$curso->valor}}</td>
					        <td>{{$curso->publicado}}</td>
					        <td>
					        	<a class="btn btn-dark" href="{{ route('admin.cursos.editar',$curso->id)}}">
					        		<i class="fa fa-edit"></i>
					        	</a>
					        	<span style="padding:5px"></span>
					        	<a class="btn btn-danger" href="{{ route('admin.cursos.deletar',$curso->id)}}">
					        		<i class="fa fa-trash"></i>
					        	</a>
					        </td>
					      </tr>
					    @endforeach
				    </tbody>
				</table>
				<div class="float-left">
					<a class="btn btn-primary" href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>
				</div>
			</div>
		</div>
	</div>
@endsection