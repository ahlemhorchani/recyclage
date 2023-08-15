<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/m.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <p>GREENCHEMRECYCLE</p>
      </div>
    </div>
   <form class="form-inline">
    <div class="input-group">
        <input class="form-control form-control-sidebar" type="search" placeholder="Rechercher" aria-label="Rechercher">
        <div class="input-group-append">
            <button class="btn btn-sidebar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>

    <!-- Sidebar Menu -->
   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
    <li class="nav-item">
        <a href="{{url('/admin')}}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Accueil</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{url('/admin/categories')}}" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>All Category</p>
        </a>
    </li>
        
      <li class="nav-item">
          <a href="{{url('/admin/products')}}" class="nav-link">
                    <i class="nav-icon fas fa-list-alt"></i>
                    <p>All Product</p>
          </a>
       </li>
       <li class="nav-item">
        <a href="{{url('/admin/orders')}}" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>All Orders</p>
        </a>
    </li>  
    
    <li class="nav-item">
        <a href="{{url('/admin/users')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Users</p>
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ route('admin.settings') }}" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>Paramètres</p>
        </a>
    </li>

</ul>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>