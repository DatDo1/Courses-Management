<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FullStackEdu</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../../admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../../admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../admin/images/favicon.png" />
</head>

<body>
  @include('sweetalert::alert')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>

              {{-- Form Login --}}
              <form class="pt-3" action="{{route('adminLogin')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="Email">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input name="email" type="email" class="form-control form-control-lg border-left-0" id="Email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Password">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="Password" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">Login</button>
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>
                    Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>
                    Google
                  </button>
                  <button type="button" class="btn btn-github auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-github mr-2"></i>
                    Github
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{route('adminRegister')}}" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
          <div class="brand-logo">
                <img src="../../../admin/images/f8_bg.png" alt="logo">
              </div>
          <!-- <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p> -->
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../../admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../../admin/js/off-canvas.js"></script>
  <script src="../../../admin/js/hoverable-collapse.js"></script>
  <script src="../../../admin/js/template.js"></script>
  <!-- endinject -->
</body>

</html>
