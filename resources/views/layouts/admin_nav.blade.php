<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="../index.php">CMS</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>  
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
<li class="nav-item dropdown no-arrow mx-1">
  <a class="nav-link dropdown-toggle" >{{ auth()->user()->name}}</a>
</li>



      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
      </li>
    </ul>

  </nav>







  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>CPanel</span>
        </a>
      </li>
      


            
      <li class="nav-item">
        <!-- {{ route('configrations') }} -->
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-user"></i>
          <span>Configuration</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('admin/categories') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Categories</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('admin/products') }}">
          <i class="    fas fa-fw fa-user"></i>
          <span>Products</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ URL::to('admin/users') }}">
          <i class="fas fa-fw fa-user"></i>
          <span>Users / Registration</span></a>
      </li>
    </ul>
