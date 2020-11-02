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
						<a href="#">
							Nova
						</a>
					</li>
					<li>
						<a href="#">
							Lista
						</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="#">
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