<!DOCTYPE html>
<html lang="en" data-textdirection="rtl" class="loading">

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:27 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>paperفا</title>

    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css')}}">
    <script src="{{asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"></script>

    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('admin-design/images/ico/apple-icon-60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin-design/images/ico/apple-icon-76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin-design/images/ico/apple-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin-design/images/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('https://pixinvent.com/free-bootstrap-template/robust-lite/app-assets/images/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('admin-design/images/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/bootstrap.css')}}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/fonts/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/vendors/css/extensions/pace.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/custom-rtl.css')}}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/core/menu/menu-types/vertical-overlay-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css-rtl/core/colors/palette-gradient.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-design/css/style-rtl.css')}}">
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

<!-- navbar-fixed-top-->
@include('admin.includes.header')

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- main menu-->
@include('admin.includes.menu')
<!-- / main menu-->




<!--form---------------------------------------------------------------->
<div class="app-content content container-fluid">
    <div class="content-wrapper">


        <div class="container">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">ویرایش مقاله</h4>
                    </header>
                    <div class="card-body">
                        <form action="/admin/edit-article/{{$article->id}}/update" method="post" class="form-horizontal">
                            <input type="hidden"  name="_method" value="PATCH">

                            <div class="form-group">
                                <label for="fa_name" class="control-label">نام فارسی</label>
                                <input type="text" value="{{$article->fa_name}}" name="fa_name" class="form-control" placeholder="{{$article->fa_name}}">
                            </div>
                            <div class="form-group">
                                <label for="eng_name" class="control-label ">نام انگلیسی</label>
                                <input type="text" value="{{$article->eng_name}}" name="eng_name" class="form-control" placeholder="{{$article->eng_name}}">
                            </div>
                            <div class="form-group">
                                <label for="author" class="control-label">نویسنده</label>
                                <input type="text" value="{{$article->author}}" name="author" class="form-control" placeholder="{{$article->author}}">
                            </div>

                            {{--<div class="form-row">--}}
                            <div class="form-group">
                                <label for="price" class="control-label">قیمت</label>
                                <input type="text" value="{{$article->price}}" name="price" class="form-control" placeholder="{{$article->price}}">

                            </div> <!-- form-group end.// -->


                            <div class="form-group">
                                <label for="cat_id">دسته</label>
                                <select name="cat_id"  class=" form-control">
                                    <option value="{{$article->cat_id}}"> {{$article->cat_name}}</option>
                                    {{--                                    <optgroup label="{{$category->type}}"></optgroup>--}}
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}">{{$category->fa_name}}</option>
                                    @endforeach
                                </select>

                            </div> <!-- form-group end.// -->

                            {{--</div> <!-- form-row.// -->--}}
                            <div class="form-group">
                                <input type="submit" value="save" class="btn btn-primary">
                            </div>

                        </form>
                    </div> <!-- card-body end .// -->
                </div> <!-- card.// -->
            </div> <!-- col.//-->
        </div>
    </div>
</div>





<!--form---------------------------------------------------------------->



<!-- ////////////////////////////////////////////////////////////////////////////-->





<!--table------------------------->
<script>
    // $(document).ready(function(){
    //     $("#mytable #checkall").click(function () {
    //         if ($("#mytable #checkall").is(':checked')) {
    //             $("#mytable input[type=checkbox]").each(function () {
    //                 $(this).prop("checked", true);
    //             });
    //
    //         } else {
    //             $("#mytable input[type=checkbox]").each(function () {
    //                 $(this).prop("checked", false);
    //             });
    //         }
    //     });
    //
    //     $("[data-toggle=tooltip]").tooltip();
    // });

    var $ = jQuery;
    $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){

        $('#example').DataTable( {
            "paging":   true,
            "ordering": true,
            "info":     false
        } );
    });
    $(document).ready(function() {
        $('.select-2-multiple').select2();
    });


</script>
<!--table------------------------->



<!-- BEGIN VENDOR JS-->
<script src="{{asset('admin-design/js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('admin-design/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="{{asset('admin-design/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/js/core/app.js')}}" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('admin-design/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:38:18 GMT -->
</html>
