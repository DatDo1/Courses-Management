<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Category</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../../admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../../admin/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../../admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../../admin/partials/_navbar.html -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:../../../admin/partials/_sidebar.html -->
          
            @include('admin.layout.menu')
         
            <!-- partial -->
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <!-- <p class="card-description">
                            Basic form layout
                        </p> -->
                        <form action="{{route('storeCategory')}}" method="POST" >
                            @csrf
                            <div class='form-group'>
                            <h1 style='font-size: 30px;'>Create Category</h1><br>
                                <label for='exampleInputID1'>ID</label>
                                <input type='text' name='idCategory' class='form-control' id='exampleInputID1' placeholder='ID'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputName1'>Name</label>
                                <input type='text' name='nameCategory' class='form-control' id='exampleInputUsername1' placeholder='Name'>
                            </div>
                            
                            <div class='form-check form-check-flat form-check-primary'>
                                <!-- <label class='form-check-label'>
                                    <input type='checkbox' class='form-check-input'>
                                    Remember me
                                </label> -->
                            </div>
                            <button type='submit' class='btn btn-primary mr-2'>Save</button>
                            <a href='{{route('listCategory')}}' type='submit' class='btn btn-light'>Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- base:js -->
        <script src="../../../admin/vendors/base/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="../../../admin/js/off-canvas.js"></script>
        <script src="../../../admin/js/hoverable-collapse.js"></script>
        <script src="../../../admin/js/template.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
</body>

</html>