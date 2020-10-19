<div id="sidebar" class="sidebar" style="background:#2fab8e">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%" >
		<!-- begin sidebar user -->
		<ul class="nav" style="margin-top:-20px">
			<li class="nav-profile" style="margin-top:15px">
				<a href="javascript:;" data-toggle="nav-profile">
					<div class="cover with-shadow"></div>
					<div class="image image-icon bg-black text-grey-darker">
						<i class="fa fa-user"></i>
					</div>
					<div class="info">
						{{$name}}
						<small>Recepcionista</small>
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
				    <span>Inscrição</span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{route('licenca.lista')}}">
							Licença
						</a>
					</li>
					<li>
						<a href="#">
							Carteira
						</a>
					</li>
				</ul>
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