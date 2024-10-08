  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('logout')?>" role="button">
          Logout
          <i class="fas fa-sign-out-alt ml-2"></i>
          
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link text-center py-1">
      <img src="<?=base_url('dist/images/sureconsult-white-logo.png')?>" alt="" height="50">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('admin/dashboard')?>" class="nav-link">
              <i class="nav-icon fa fa-columns text-info"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/blogs')?>" class="nav-link">
              <i class="nav-icon far fa-copy text-info"></i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/Queries')?>" class="nav-link">
              <i class="nav-icon fa fa-question text-info"></i>
              <p>Queries</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('admin/members')?>" class="nav-link">
              <i class="nav-icon far fa-user text-info"></i>
              <p>Profile</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  