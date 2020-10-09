<div id="header" class="header navbar-default">
      <!-- begin navbar-header -->
      <div class="navbar-header">
        <a href="{{route('home.inicio')}}" class="navbar-brand">
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
          <form action="" method="POST" name="search_form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nº de registro..." />
              <button type="submit" class="btn btn-search"><i class="ion-ios-search"></i></button>
            </div>
          </form>
        </li>
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle icon">
            <i class="ion-ios-notifications"></i>
            <span class="label">0</span>
          </a>
          <ul class="dropdown-menu media-list dropdown-menu-right">
            <li class="dropdown-header">Notificações (0)</li>
            <li class="text-center width-300 p-b-10 p-t-10">
              Sem Notificações
            </li>
          </ul>
        </li>
        <li class="dropdown navbar-user">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="image image-icon bg-black text-grey-darker">
              <i class="fa fa-user"></i>
            </div>
            <span class="d-none d-md-inline">
              {{Auth::user()->name}}
            </span>
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
<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container">
    
    <a class="navbar-brand" href="{{route('home.inicio')}}">Laravel</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <div class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
           {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i>
              Perfil
            </a>
            <a class="dropdown-item" href="{{route('login.sair')}}">
              <i class="fa fa-sign-out"></i>
              Sair
            </a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</nav>-->