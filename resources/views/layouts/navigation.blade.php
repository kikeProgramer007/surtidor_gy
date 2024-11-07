<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- NAV PERFIL -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <i class="fas fa-user-cog"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{ asset('/vendor/images/user.png') }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{-- {{ Auth::user()->name }} --}}
                        <small class="text-muted">Montero - {{ date('d-m-Y') }} </small>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <div class="row">
                        <div class="col-5 text-center">
                            <div id="#modo">
                                <div class="centrar-verticalmente">
                                    <label class="theme-switch" for="checkbox">
                                        <input type="checkbox" id="checkbox" />
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 ">
                            <p href="#"><i class="fas fa-moon mr-2"></i> Modo oscuro</p>
                        </div>
                    </div>
                    <!-- /.row -->

                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="{{route('profile.edit')}}"class="btn btn-default btn-flat"><i
                            class="fas fa-user mr-2"></i>Perfil</a>

                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="btn btn-default btn-flat float-right"><i
                            class="fas fa-sign-out-alt mr-2"></i>Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>
  <!-- /.navbar -->


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
      {{-- <a href="{{url('/home')}}" class="brand-link"> --}}
    <img src="{{asset('/vendor/images/user.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-bold font-weight-light">Panaderia</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('/vendor/images/user.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bread-slice"></i>
            <p>
              Productos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ asset('producto') }}" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
                <p>Panes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{asset('categoria')}}" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
                <p>Categorias</p>
              </a>
            </li>
          </ul>
        </li>





        <li class="nav-item">
          <a href="{{asset('administracion/cliente')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Clientes
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shipping-fast"></i>
            <p>
              Pedidos
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Administración
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{asset('administracion')}}" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Usuarios</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Empleado</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Provedores</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-header">REPORTES</li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Reportes
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Stock mínimos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Rango de fechas</p>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Gráficos
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>