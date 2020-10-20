@extends('layout.template')

@section('titulo','Licença')
<link href="{{asset('assets-login/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets-login/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@section('conteudo')
	<div id="content" class="content" style="margin-top:40px;">
			<div class="row">
				<!-- begin col-10 -->
				<input type="hidden"  id="recividToken" value="{{$token}}">
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
										<th class="text-nowrap">Telefone</th>
										<th class="text-nowrap">Nível acadêmico</th>
										<th class="text-nowrap">Estado processo</th>
										<th class="text-nowrap">Data Registro</th>
										<th data-orderable="false"></th>
									</tr>
								</thead>
								<tbody id="tableData">
									@if(isset($candidatos))
										@foreach($candidatos as $candidato)
											<tr class="even gradeC">
												<td width="1%" class="f-s-600 text-inverse">
													{{$candidato->id}}
												</td>
												<td width="1%" class="with-img">
													<img src="{{asset('img/default.jpg')}}" class="img-rounded height-30" />
												</td>
												<td>{{$candidato->nome}}</td>
												<td>{{$candidato->contacto[1]->telefone}}</td>
												<td>#</td>
												<td>#</td>
												<td>#</td>
												<td class="text-center">
													<a href="{{route('licenca.ver',$candidato->id)}}" title="Ver detalhes" class="btn btn-success btn-action">
														<i class="fa fa-eye"></i>
													</a>
													<a href="{{route('licenca.editar',$candidato->id)}}" title="Editar" class="btn btn-dark btn-action">
														<i class="fa fa-edit"></i>
													</a>
													<a href="{{route('licenca.eliminar',$candidato->id)}}" title="Eliminar" class="btn btn-danger btn-action">
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
							<a href="{{route('licenca.nova')}}" class="btn btn-primary btn-destaque">
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
<script src="{{asset('js/Listalicencas/index.js')}}" type="module"></script>
@endsection