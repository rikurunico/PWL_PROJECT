<aside class="main-sidebar sidebar-dark-primary elevation-4" style="height: 100vh">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('src/img/brandlogo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Fast</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('storage/'.auth()->user()->foto) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
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
            <a href="{{ route('HomePageAdmin') }} " class="nav-link {{ ($tittle === "Home Page Admin") ? 'active' : ''}}">
            <i class="bi bi-people-fill"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('ProfilePageAdmin') }} " class="nav-link {{ ($tittle === "Profile Page") ? 'active' : ''}}">
          <i class="bi bi-person-badge"></i>
              <p>Profile</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="bi bi-clipboard2-data"></i>
              <p>
              Database Toko
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('DataProductPage') }}" class="nav-link {{ ($tittle === "Data Product") ? 'active' : ''}}"">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Product</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('DataPenjualanPage') }}" class="nav-link {{ ($tittle === "Data Penjualan") ? 'active' : ''}}"">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Data Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{ route('DataSupplierPage') }}" class="nav-link {{ ($tittle === "Data Supplier") ? 'active' : ''}}"">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Suplier</p>
                </a>
              </li>
              
            </ul>
          </li>
      

          
          <li class="nav-item bg-danger">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="bi bi-box-arrow-in-left"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>