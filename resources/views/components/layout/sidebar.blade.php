<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('documentacion')}}" class="brand-link">
      <img src="{{ asset('lib/AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminSISTRIT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('historial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Historial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('documentacion')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Documentación</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('informacion')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Acerca de</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
