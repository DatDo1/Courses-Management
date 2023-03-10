<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Video</title>
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
                        <form action="{{route('updateVideo')}}" method="post">
                            @csrf
                            <h4 class="card-title">Edit Video</h4>
                            <input type="hidden" name="id" value="{{$video->id}}">
                            <div class='form-group'>
                                <label for='exampleInputTitle1'>Title</label>
                                <input value='{{$video->title}}' name='title'  type='text' class='form-control' id='exampleInputTitle1' placeholder='Title'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputDescription2'>Description</label>
                                <textarea name='description' class='form-control' id='exampleInputDescription2' rows='4'>{{$video->description}}'</textarea>
                            </div>
                            <div class='form-group'>
                                <label for='exampleInputLink3'>Link</label>
                                <input value='{{$video->link}}' name='link' type='link' class='form-control' id='exampleInputLink3' placeholder='Link'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleDuration4'>Duration</label>
                                <input value='{{$video->duration}}' name='duration'  type='text' class='form-control' id='exampleDuration4' placeholder='Duration'>
                            </div>
                            <div class='form-group'>
                                <label for='exampleDatePosted5'>Date Posted</label>
                                <input value='{{$video->date_posted}}' name='date_posted'  type='text' class='form-control' id='exampleDatePosted5' placeholder='Date Posted'>
                            </div>
                            <div class='form-group'>
                                <label for='examplePartVideo6'>Part Video</label>
                                <select name ='part_id' style="width:100%; padding:2px 0 ;text-transform: none !important; background-color: #ffffff; opacity: 1.5; color:#000000 !important; font-size: 14px;">
                                @foreach ($partsVideoList as $partVideo)
                                    <option value='{{$partVideo->id}}'>{{$partVideo->name}} - {{$partVideo->course->name}} - {{$partVideo->course->category->name}}</option>
                                @endforeach
                                </select>
                            </div>          
                            <input type='submit' class='btn btn-primary mr-2' value='Save'/>
                            <a href='{{route('listVideo')}}' type='submit' class='btn btn-light'>Cancel</a>
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