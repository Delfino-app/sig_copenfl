<div id="header" class="header navbar-default">
    <!-- begin navbar-header -->
    <div class="navbar-header">
      <a href="{{route('home')}}" class="navbar-brand">
        <b>SIG</b> - COPENFL</a>
      <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- end navbar-header -->
    
    <!-- begin header-nav -->
    <ul class="navbar-nav navbar-right">
      <li class="navbar-form">
        <form action="{{route('pesquisa.processo')}}" method="POST" name="search_form">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="text" class="form-control" name="processo_num" placeholder="Nº de Processo..." require style="height:28px !important" />
            <button type="submit" class="btn btn-search">
              <i class="ion-ios-search" style="font-size:18px"></i></button>
          </div>
        </form>
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
          <i class="ion-ios-notifications" style="font-size:22px"></i>
          <span class="label notify-count" style="font-size:10px !important">0</span>
        </a>
        <ul class="dropdown-menu media-list dropdown-menu-right">
          <li class="dropdown-header">Notificações (0)</li>
          <li class="text-center width-300 p-b-10 p-t-10">
            Sem Notificações
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" title="Suporte">
          <i class="ion-md-help-circle" style="font-size:22px"></i>
        </a>
      </li>
      <li class="dropdown navbar-user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('img/default.jpg')}}" alt="{{$name}}">
          <span class="d-none d-md-inline">
            {{$name}}
          </span>
          <b class="caret"></b>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="javascript:;" class="dropdown-item">
            Perfil
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('login.sair')}}" class="dropdown-item">
            Sair
          </a>
        </div>
      </li>
    </ul>
    <!-- end header navigation right -->
  </div>
