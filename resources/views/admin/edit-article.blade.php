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
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- navbar-fixed-top-->
    @include('admin.includes.header')

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    @include('admin.includes.menu')
    <!-- / main menu-->



    <!--table---------------------------------------------------------------->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>شناسه مقاله</th>
                        <th>نام مقاله</th>
                        <th>نویسنده</th>
                        <th>دسته بندی مقاله</th>
                        <th>قیمت</th>
                        <th>ویرایش</th>
                        <th>پاک کردن</th></tr>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            {{--<td><input type="checkbox" class="checkthis" name="delid[]" value="{{$article->id}}" /></td>--}}
                            <td>{{$article->id}}</td>
                            <td>{{$article->fa_name}}</td>
                            <td>{{$article->author}}</td>
                            <td>{{$article->cat_name}}</td>
                            <td>{{$article->price}}</td>
                            <td>
                                <a href="{{url("/admin/edit-article/edit/{$article->id}")}}">
                                    <p data-placement="top" data-toggle="tooltip" title="Edit">
                                        <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" >
                                            <i class="icon-pencil"></i>
                                        </button>
                                    </p>
                                </a>
                            </td>
                            <td>
                                <a href="{{url("/admin/edit-article/delete/{$article->id}")}}" onclick="return confirm('آیا میخواهید این آیتم پاک شود');">
                                    <p data-placement="top" data-toggle="tooltip" title="Delete">
                                        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                            <i class="icon-trash4"></i>
                                        </button>
                                    </p>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{--<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>--}}
                    {{--<h4 class="modal-title custom_align" id="Heading">ویرایش مقاله</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<div class="form-group">--}}
                        {{--<input class="form-control " type="text" placeholder="Mohsin">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}

                        {{--<input class="form-control " type="text" placeholder="Irshad">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>--}}


                    {{--</div>--}}
                    {{--<div class="modal-footer ">--}}
                    {{--<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
            {{--<div class="modal-footer ">--}}
                {{--<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- /.modal-content -->--}}
    {{--</div>--}}
    {{--<!-- /.modal-dialog -->--}}
{{--</div>--}}

{{--<div class="app-content content container-fluid">--}}
    {{--<div class="content-wrapper">--}}
        {{--<div class="content-header row">--}}
        {{--</div>--}}
        {{--<div class="content-body"><!-- stats -->--}}

            {{--<div class="container">--}}
                {{--<div class="row">--}}


                    {{--<div class="col-md-12">--}}
                        {{--<div class="container">--}}
                            {{--<h1>ویرایش مقاله ها</h1>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-10">--}}
                                    {{--<table id="example" class="display" cellspacing="0" width="100%">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th><input type="checkbox" id="checkall" /></th>--}}
                                            {{--<th>شناسه مقاله</th>--}}
                                            {{--<th>نام مقاله</th>--}}
                                            {{--<th>نویسنده</th>--}}
                                            {{--<th>دسته بندی مقاله</th>--}}
                                            {{--<th>قیمت</th>--}}

                                            {{--<th>Edit</th>--}}
                                            {{--<th>Delete</th></tr>--}}
                                        {{--</thead>--}}
                                        {{--<tfoot>--}}
                                        {{--<tr>--}}
                                            {{--<th><input type="checkbox" id="checkall" /></th>--}}
                                            {{--<th>شناسه مقاله</th>--}}
                                            {{--<th>نام مقاله</th>--}}
                                            {{--<th>نویسنده</th>--}}
                                            {{--<th>دسته بندی مقاله</th>--}}
                                            {{--<th>قیمت</th>--}}

                                            {{--<th>Edit</th>--}}
                                            {{--<th>Delete</th></tr>--}}

                                        {{--</tr>--}}
                                        {{--</tfoot>--}}
                                        {{--<tbody>--}}
                                        {{--@foreach($articles as $article)--}}
                                            {{--<tr>--}}
                                                {{--<td><input type="checkbox" class="checkthis" name="delid[]" value="{{$article->id}}" /></td>--}}
                                                {{--<td>{{$article->id}}</td>--}}
                                                {{--<td>{{$article->fa_name}}</td>--}}
                                                {{--<td>{{$article->author}}</td>--}}
                                                {{--<td>{{$article->cat_name}}</td>--}}
                                                {{--<td>{{$article->price}}</td>--}}
                                                {{--<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="icon-pencil"></i></button></p></td>--}}
                                                {{--<td><a href="{{url("/admin/edit-article/delete/{$article->id}")}}" onclick="return confirm('آیا میخواهید این آیتم پاک شود');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="icon-trash4"></i></button></p></a></td>--}}
                                            {{--</tr>--}}
                                        {{--@endforeach--}}
                                        {{--</tbody>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
            {{--<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">--}}
                {{--<div class="modal-dialog">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>--}}
                            {{--<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<input class="form-control " type="text" placeholder="Mohsin">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}

                                {{--<input class="form-control " type="text" placeholder="Irshad">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>--}}


                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer ">--}}
                            {{--<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /.modal-content -->--}}
                {{--</div>--}}
                {{--<!-- /.modal-dialog -->--}}
            {{--</div>--}}
            {{--<form action="{{ url("/admin/edit-article/del")}}" method="post"></form>--}}
            {{--<div class="container">--}}
            {{--<div class="row">--}}


            {{--<div class="col-md-12">--}}
            {{--<h4>ویرایش مقاله ها</h4>--}}
            {{--<div class="table-responsive">--}}

            {{--<table id="mytable" class="table table-bordred table-striped">--}}

            {{--<thead>--}}

            {{--<th><input type="checkbox" id="checkall" /></th>--}}
            {{--<th>شناسه مقاله</th>--}}
            {{--<th>نام مقاله</th>--}}
            {{--<th>نویسنده</th>--}}
            {{--<th>دسته بندی مقاله</th>--}}
            {{--<th>قیمت</th>--}}

            {{--<th>Edit</th>--}}
            {{--<th>Delete</th>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($articles as $article)--}}
            {{--<tr>--}}
            {{--<td><input type="checkbox" class="checkthis" name="delid[]" value="{{$article->id}}" /></td>--}}
            {{--<td>{{$article->id}}</td>--}}
            {{--<td>{{$article->fa_name}}</td>--}}
            {{--<td>{{$article->author}}</td>--}}
            {{--<td>{{$article->cat_name}}</td>--}}
            {{--<td>{{$article->price}}</td>--}}
            {{--<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="icon-pencil"></i></button></p></td>--}}
            {{--<td><a href="{{url("/admin/edit-article/delete/{$article->id}")}}" onclick="return confirm('آیا میخواهید این آیتم پاک شود');"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="icon-trash4"></i></button></p></a></td>--}}
            {{--</tr>--}}
            {{--@endforeach--}}

            {{--</tbody>--}}

            {{--</table>--}}

            {{--<div class="clearfix"></div>--}}


            {{--</div>--}}

            {{--</div>--}}
            {{--</div>--}}




            {{--<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">--}}
            {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
            {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>--}}
            {{--<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}

            {{--<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>--}}

            {{--</div>--}}
            {{--<div class="modal-footer ">--}}
            {{--<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.modal-content -->--}}
            {{--</div>--}}
            {{--<!-- /.modal-dialog -->--}}
            {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<!--table---------------------------------------------------------------->



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
