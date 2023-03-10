<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Part Videos</title>
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
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('updatePartVideo')}}" method="post">
                            @csrf
                            <div class='form-group'>
                            <h1 style='font-size: 30px;'>Edit Part Videos</h1> <br>
                                <label for='exampleInputID1'>ID</label>
                                <input value='{{$pvideo->id}}' name='id' type='text' class='form-control' id='exampleInputID1' placeholder='ID'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputName1'>Name</label>
                                <input value='{{$pvideo->name}}' name='name' type='text' class='form-control' id='exampleInputUsername1' placeholder='Name'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputCourses_id1'>Courses</label>
                                <select name ='course_id' style='width:100%; padding:2px 0 ;text-transform: none !important; background-color: #ffffff; opacity: 0.5; color:#000000 !important; font-size: 14px;'>
                                @foreach ($courseList as $course)    
                                    <option value="{{ $course->id }}">{{$course->name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <button name='update' type='submit' class='btn btn-primary mr-2'>Save</button>
                            <a href='{{route('listPartVideo')}}' type='submit' class='btn btn-light'>Cancel</a>
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
        <!-- End custom js for this page-->
</body>

</html>