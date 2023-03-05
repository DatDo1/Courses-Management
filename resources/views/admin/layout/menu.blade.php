{{-- <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
  <a class="navbar-brand brand-logo" href="../user/ListUser.php">FullStackEdu</a>
    <a class="navbar-brand brand-logo-mini" href="../user/ListUser.php">FullStackEdu</a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-lg-flex d-none">
        <a href="./create_user.php" type="button" class="btn btn-info font-weight-bold">+ Create New</a>
      </li>

      <li class="nav-item dropdown d-flex mr-4 ">
        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
          <a class="dropdown-item preview-item">
            <i class="icon-head"></i> Profile
          </a>
          <a class="dropdown-item preview-item" href="{{route('adminLogout')}}">
            <i class="icon-inbox"></i> Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav> --}}
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="../../admin/images/avatar.png">
          </div>
          <div class="user-name">
            @if(session('role_id'))
              @if(session('email'))
                Hi, {{session('email')}}
              @endif
            @endif
          </div>
          <div class="user-designation">
              
          </div>
        </div>
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('listAccount')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Accounts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('listCourse')}}">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Courses</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('listCategory')}}">
              <i class="icon-stack menu-icon"></i>
              <span class="menu-title">Categories</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('listVideo')}}">
              <i class="icon-video menu-icon"></i>
              <span class="menu-title">Videos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('listPartVideo')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Part Videos</span>
            </a>
          </li>
        </ul>
      </nav>
