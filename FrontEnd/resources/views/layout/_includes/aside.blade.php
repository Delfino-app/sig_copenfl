<div id="sidebar" class="sidebar" style="background:#2fab8e">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%" >
		<!-- begin sidebar user -->
		<ul class="nav" style="margin-top:-20px">
			<li class="nav-profile" style="margin-top:15px">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
					<div class="image">
						<img src="{{asset('img/default.jpg')}}" alt="{{$name}}">
					</div>
					<div class="info">
						{{$name}}
						<small></small>
					</div>
				</a>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav bg-dark nav-aside">
			<li class="nav-header">Navegação</li>
			<li class="">
				<a href="{{route('home')}}">
				    <i class="ion-ios-pulse"></i>
				    <span>Dashboard</span>
			    </a>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
				    <i class="ion-ios-paper"></i> 
				    <span>Licença</span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{route('licenca.nova')}}">
							Nova
						</a>
					</li>
					<li>
						<a href="{{route('licenca.lista')}}">
							Lista
						</a>
					</li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
				    <i class="ion-ios-card"></i> 
				    <span>Carteira</span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{route('carteira.nova')}}">
							Nova
						</a>
					</li>
					<li>
						<a href="{{route('carteira.lista')}}">
							Lista
						</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="{{route('pagamentos')}}">
				    <i class="ion-ios-pulse"></i>
				    <span>Pagamentos</span>
			    </a>
			</li>
			<li class="">
				<a href="#" data-toggle="modal" data-target="#modalSuporte">
				    <i class="ion-ios-help-buoy"></i>
				    <span>Suporte</span>
			    </a>
			</li>
			<li class="">
				<a href="{{route('login.sair')}}">
				    <i class="ion-ios-log-out"></i>
				    <span>Sair</span>
			    </a>
			</li>
			<!-- begin sidebar minify button -->
			<li>
				<a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify">
					<i class="ion-ios-arrow-back"></i> <span>Ocultar</span></a></li>
			<!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<div class="modal fade" id="modalSuporte">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"> <i class="ion-ios-help-buoy"></i> Precisa de Ajuda?</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body" style="padding:0px">
				<div class="row">
					<div class="col-lg-12">
						<form action="{{route('suporte.ajuda')}}" method="POST">
							{{csrf_field()}}
							<div class="form-group col-lg-12 col-sm-6">
								<label class="col-form-label">Assunto</label>
								<input type="text" name="assunto" placeholder="Assunto" class="form-control" required/>
							</div>
							<div class="form-group col-lg-12 col-sm-6">
								<label class="col-form-label">Mensagem</label>
								<textarea rows="3" name="mensagem" class="form-control" placeholder="Mensagem" required></textarea>
							</div>
							<div class="form-group col-lg-12 col-sm-6">
								<button class="btn btn-primary btn-destaque" type="submit" style="width:100%;padding:10px;font-size:14px">
									Enviar <i class="fa fa-send"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer" id="modalSuporteFooter">

			</div>
		</div>
	</div>
</div>