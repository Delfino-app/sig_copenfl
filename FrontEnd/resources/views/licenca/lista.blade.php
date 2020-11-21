@extends('layout.template')

@section('titulo','Licenças')
<link href="{{asset('assets-login/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets-login/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
@section('conteudo')
	<div id="content" class="content" style="margin-top:40px;">
			<div class="row">
				<!-- begin col-10 -->
				<input type="hidden"  id="recividToken" value="{{$token}}">
				<div class="col-xl-12">
					@if(!empty($infoAuth))
						<div class="alert alert-danger" style="padding:5px 10px;font-size: 16px;">
							{{$infoAuth}}
						</div>
					@endif
					@if(!empty($infoDelete))
						<div class="alert alert-success" style="padding:5px 10px;font-size: 16px;">
							{{$infoDelete}}
						</div>
					@endif
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Licenças - Lista de Incrições</h4>
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
										<th width="1%">
										</th>
										<th width="1%" data-orderable="false">
										</th>
										<th class="text-nowrap">Nome</th>
										<th class="text-nowrap">Gênero</th>
										<th class="text-nowrap">Naturalidade</th>
										<th class="text-nowrap" data-orderable="false">Telefone</th>
										<th class="text-nowrap">Nº Inscrição</th>
										<th class="text-nowrap">Estado</th>
										<th class="text-nowrap" data-orderable="false">Acção</th>
										<th width="0%"></th>
									</tr>
								</thead>
								<tbody>
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
												<td>{{$candidato->genero}}</td>
												<td>{{$candidato->naturalidade->provincia}} - {{$candidato->naturalidade->municipio}}</td>
												<td>{{$candidato->residencia->telefone}}</td>
												<td>{{$candidato->inscricao->numero}}</td>
												<td>{{$candidato->inscricao->estado}}</td>
												<td class="text-center">
													<a href="{{route('licenca.ver',$candidato->id)}}" title="Ver detalhes" class="btn btn-success btn-action">
														<i class="ion-md-eye"></i>
													</a>
													<!--<a href="{{route('licenca.editar',$candidato->id)}}" title="Editar" class="btn btn-dark btn-action">
														<i class="ion-md-create"></i>
													</a>-->
													<a href="#" reference ="{{route('licenca.eliminar',$candidato->id)}}" data-toggle="modal" data-target="#modalLicenca" title="Eliminar" class="btn btn-danger btn-action teste">
														<i class="ion-md-trash"></i>
													</a>
												</td>
												<td></td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>
						</div>
						<div class="modal fade" id="modalLicenca">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title"><i class="fa fa-trash"></i> Eliminar</h4>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-lg-12" id="modalLicencaContainer">
												
											</div>
										</div>
									</div>
									<div class="modal-footer" id="modalLicencaFooter">

									</div>
								</div>
							</div>
						</div>
						<div class="float-right">
							<br>
							<a href="{{route('licenca.nova')}}" class="btn btn-primary btn-destaque">
								Adicionar<i class="ion-md-add-circle-outline" style="padding-left:5px;"></i>
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