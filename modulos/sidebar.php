<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="inicio" class="brand-link">
    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block"><i class="far fa-user"></i><?php echo $_SESSION['nombres'] ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Configuración
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="clientes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Clientes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="proveedores" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Proveedores</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="productos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Productos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="personas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Personas</p>
              </a>
            </li>
          </ul>
          <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Examen
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item 1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item 1</p>
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