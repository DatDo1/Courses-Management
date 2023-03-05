<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Videos</title>
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
    <div class="container-scroller">
        <!-- partial:../../admin/partials/_navbar.html -->

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:../../admin/partials/_sidebar.html -->

            @include('admin.layout.menu')

            <!-- partial -->
            <div class="col-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Videos</h4>
                        <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                            <div class='form-group'>
                                <label for='exampleInputTitle1'>Title</label>
                                <input  type='text' class='form-control' id='exampleInputTitle1' placeholder='Title'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputDescription2'>Description</label>
                                <textarea class='form-control' id='exampleInputDescription2' rows='4'></textarea>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputLink3'>Link</label>
                                <input type='link' class='form-control' id='exampleInputLink3' placeholder='Link'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleDuration4'>Duration</label>
                                <input  type='text' class='form-control' id='exampleDuration4' placeholder='Duration'>
                            </div>
                            <div class ='form-group'>
                                <label for='exampleDatePosted5'>Date Posted</label>
                                <input  type='text' class='form-control' id='exampleDatePosted5' placeholder='Date Posted'>
                            </div>
                            <div class='form-group'>
                                <label for='examplePartVideo6'>Part Video</label>
                                <select name ='category_id' style="width:100%; padding:2px 0 ;text-transform: none !important; background-color: #ffffff; opacity: 1.5; color:#000000 !important; font-size: 14px;">
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                </select>
                            </div>
                            
                            <input  name='add' type='submit' class='btn btn-primary mr-2' value='Save'/>
                            <a href='./ListVideos.php' type='submit' class='btn btn-light'>Cancel</a>
                        </form>
                    </div>
                </div>
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
        <script src="../../admin/js/file-upload.js"></script>
        <script src="../../admin/js/typeahead.js"></script>
        <script src="../../admin/js/select2.js"></script>
        <!-- End custom js for this page-->
</body>

</html>