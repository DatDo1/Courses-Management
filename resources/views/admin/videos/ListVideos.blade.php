<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>User</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../admin/images/favicon.png" />
</head>

<body>
  @include('sweetalert::alert')
  <div class="container-scroller">
    <!-- partial:../../admin/partials/_navbar.html -->
    
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="../user/ListUser.php">Admin Pages</a>
        <a class="navbar-brand brand-logo-mini" href="../user/ListUser.php">Admin Pages</a>
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
            <a href="{{route('createVideo')}}" type="button" class="btn btn-info font-weight-bold">+ Create New</a>
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
              <a class="dropdown-item preview-item" href="../../admin/api/controller/logout_controller.php">
                <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:../../admin/partials/_sidebar.html -->

      @include('admin.layout.menu')
      

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Videos Table</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Link</th>
                          <th>Duration</th>
                          <th>Date Posted</th>
                          <th>Part Video</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($videoList as $video)
                        <tr>
                          <td>{{$video->title}}</td>
                          <td>{{$video->description}}</td>
                          <td>{{$video->link}}</td>
                          <td>{{$video->duration}}</td>
                          <td>{{$video->date_posted	}}</td>
                          <td>{{$video->partsvideo->name}}</td>
                          <td>
                            <a href="video/{{$video->id}}" value='id' class='btn btn-success'><b class='mdi mdi-upload btn-icon-prepend'>S???a</b></a>
                            <form action="video/{{$video->id}}/delete" method="post">
                              @csrf 
                              @method('DELETE')
                              <button value='id' class='btn btn-danger'><b class='mdi mdi-alert btn-icon-prepend'>X??a</b></button>
                            </form>
                          </td>
                          @endforeach
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../admin/partials/_footer.html -->
        <footer class="footer">

        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../admin/js/off-canvas.js"></script>
  <script src="../../admin/js/hoverable-collapse.js"></script>
  <script src="../../admin/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
