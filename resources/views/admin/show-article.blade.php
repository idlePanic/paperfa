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
    {{--table-----------------------------}}

</head>
<style>
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">


<!-- navbar-fixed-top-->
@include('admin.includes.header')

{{--<!-- ////////////////////////////////////////////////////////////////////////////-->--}}


<!-- main menu-->
@include('admin.includes.menu')

<!-- / main menu-->

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->

            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <div class="container">
                            <h1>لیست مقاله ها</h1>
                            <div class="row">
                                <div class="col-sm-10">
                                    <table id="example" class="display" cellspacing="0" width="100%">
                                        <thead>

                                        <tr>
                                            <th>نام مقاله</th>
                                            <th>نویسنده</th>
                                            <th>دسته</th>
                                            <th>قیمت</th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>نام مقاله</th>
                                            <th>نویسنده</th>
                                            <th>دسته</th>
                                            <th>قیمت</th>

                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($article as $art)
                                            <tr>
                                                <td>{{$art->fa_name}}</td>
                                                <td>{{$art->author}}</td>
                                                <td>{{$art->cat_name}}</td>
                                                <td>{{$art->price}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--table---------------------------------------------------------------->

<script>

    var $ = jQuery;
    $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){

        $('#example').DataTable( {
            "paging":   true,
            "ordering": true,
            "info":     false
        } );
    });

</script>
<!--table---------------------------------------------------------------->






<!-- BEGIN VENDOR JS-->


<script src="{{asset('admin-design/vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-design/vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>

<script src="{{asset('admin-design/vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
{{--<!-- BEGIN VENDOR JS-->--}}
{{--<!-- BEGIN PAGE VENDOR JS-->--}}
<script src="{{asset('admin-design/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
{{--<!-- END PAGE VENDOR JS-->--}}
{{--<!-- BEGIN ROBUST JS-->--}}
<script src="{{asset('admin-design/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('admin-design/js/core/app.js')}}" type="text/javascript"></script>
{{--<!-- END ROBUST JS-->--}}
{{--<!-- BEGIN PAGE LEVEL JS-->--}}
<script src="{{asset('admin-design/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:38:18 GMT -->
</html>
