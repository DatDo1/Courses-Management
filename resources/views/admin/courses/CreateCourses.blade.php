<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Courses</title>
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
            <div class="col-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Courses</h4>
                        <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                            <div class='form-group'>
                                <label for='exampleInputName2'>Name Courses</label>
                                <input  type='text' class='form-control' id='exampleInputName1' placeholder='Name Product'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputPrice3'>Price</label>
                                <input type='text' class='form-control' id='exampleInputEmail3' placeholder='Price'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputColor4'>Price Sale</label>
                                <input type='text' class='form-control' id='exampleInputPassword4' placeholder='Price Sale'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleDescribe1'>Describe</label>
                                <textarea class='form-control' id='exampleTextarea1' rows='8'></textarea>
                            </div>
                            <div class='form-group'>
                                <label for='exampleDescribe1'>Category Courses</label>
                                <select name ='category_id' style='width:100%; padding:2px 0 ;text-transform: none !important; background-color: #ffffff; opacity: 0.5; color:#000000 !important; font-size: 14px;'>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                </select>
                            </div>
                            <div class='form-group'>
                                <label>File upload</label>
                                <input type='file' name='image' class='file-upload-default'>
                                <div class='input-group col-xs-12'>
                                    <input style='height:100%' type='text' class='form-control file-upload-info' disabled placeholder='Upload Image'>
                                    <span class='input-group-append'>
                                        <button class='file-upload-browse btn btn-primary' type='button'>Upload</button>
                                    </span>
                                </div>
                            </div>
                            
                            <input  name='add' type='submit' class='btn btn-primary mr-2' value='Save'/>
                            <a href='./ListCourses.php' type='submit' class='btn btn-light'>Cancel</a>
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
        <script src="../../../admin/js/file-upload.js"></script>
        <script src="../../../admin/js/typeahead.js"></script>
        <script src="../../../admin/js/select2.js"></script>
        <!-- End custom js for this page-->
</body>

</html>