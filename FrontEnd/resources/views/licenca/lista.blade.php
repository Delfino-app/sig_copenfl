@extends('layout.template')

@section('titulo','Licença')
<link href="{{asset('assets-login/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets-login/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@section('conteudo')
	<div id="content" class="content" style="margin-top:40px;">
			<div class="row">
				<!-- begin col-10 -->
				<div class="col-xl-12">
					<!-- begin panel -->
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Licença - Lista de Incrições</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<!-- begin panel-body -->
						<div class="panel-body">
							<table id="data-table-responsive" class="table table-striped table-bordered table-td-valign-middle">
								<thead>
									<tr>
										<th width="1%"></th>
										<th width="1%" data-orderable="false"></th>
										<th class="text-nowrap">Nome</th>
										<th class="text-nowrap">Data Nascimento</th>
										<th class="text-nowrap">Telefone</th>
										<th class="text-nowrap">Tipo</th>
										<th class="text-nowrap">Estado processo</th>
										<th class="text-nowrap">Data Registro</th>
										<th data-orderable="false"></th>
									</tr>
								</thead>
								<tbody>
									@if(isset($licencas))
										@foreach($licencas as $licenca)
											<tr class="even gradeC">
												<td width="1%" class="f-s-600 text-inverse">
													{{$licenca->id}}
												</td>
												<td width="1%" class="with-img">
													<img src="{{asset('img/default.jpg')}}" class="img-rounded height-30" /></td>
												<td>{{$licenca->nome}}</td>
												<td>{{$licenca->data_nascimento}}</td>
												<td>999989797</td>
												<td>{{$licenca->tipo_estudante}}</td>
												<td>{{$licenca->estado}}</td>
												<td>{{$licenca->data_registro}}</td>
												<td class="text-center">
													<a href="{{route('licenca.ver',$licenca->id)}}" title="Ver detalhes" class="btn btn-success btn-action">
														<i class="fa fa-eye"></i>
													</a>
													<a href="{{route('licenca.documentos',$licenca->id)}}" title="Documentos" class="btn btn-primary btn-action">
														<i class="fa fa-file-archive-o"></i>
													</a>
													<a href="{{route('licenca.editar',$licenca->id)}}" title="Editar" class="btn btn-dark btn-action">
														<i class="fa fa-edit"></i>
													</a>
													<a href="{{route('licenca.eliminar',$licenca->id)}}" title="Eliminar" class="btn btn-danger btn-action">
														<i class="fa fa-trash"></i>
													</a>
												</td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>
						</div>
						<div class="float-right">
							<br>
							<a href="#" class="btn btn-primary btn-destaque">
								Adicionar<i class="fa fa-plus-circle" style="padding-left:5px;"></i>
							</a>
						</div>
						<!-- end panel-body -->
					</div>
					<!-- end panel -->
				</div>
				<!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>
@endsection
@section('add-js')
<script src="{{asset('assets-login/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets-login/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets-login/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets-login/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets-login/js/demo/table-manage-responsive.demo.js')}}"></script>
@endsection