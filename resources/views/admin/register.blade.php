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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>

              {{-- Form Register --}}
              <form class="pt-3" action="{{route('adminRegister')}}" method="post">
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                  @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="form-group">
                  <label>Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="confirm-password" class="form-control form-control-lg border-left-0" placeholder="Confirm Password">
                  </div>
                  @error('confirm-password')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <!-- <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label> -->
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn" >SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{route('adminLogin')}}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
          <div class="brand-logo">
                <img src="../../../admin/images/fullstack.png" alt="logo">
              </div><!-- <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p> -->
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
