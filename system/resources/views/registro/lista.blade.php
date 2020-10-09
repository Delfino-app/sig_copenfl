@extends('layout.template')

@section('titulo','Inscrições')
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
							<h4 class="panel-title">Lista de Incrições</h4>
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
										<th class="text-nowrap">Gênero</th>
										<th class="text-nowrap">Estado Civil</th>
										<th class="text-nowrap">Tipo</th>
									</tr>
								</thead>
								<tbody>
									@foreach($enfermeiros as $enfermeiro)
										<tr class="even gradeC">
											<td width="1%" class="f-s-600 text-inverse">
												{{$enfermeiro->id}}
											</td>
											<td width="1%" class="with-img">
												<img src="{{asset('img/default.jpg')}}" class="img-rounded height-30" /></td>
											<td>{{$enfermeiro->nome}}</td>
											<td>{{$enfermeiro->data_nascimento}}</td>
											<td>{{$enfermeiro->genero}}</td>
											<td>{{$enfermeiro->estado_civil}}</td>
											<td>{{$enfermeiro->tipo_enfermeiro}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
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