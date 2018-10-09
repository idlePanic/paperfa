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

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        @if(Session::has('flash_message'))
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>

                {{Session::get('flash_message')}}
            </div>
        @endif





        <div class="container">
            <div class="col-md-6">

                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">اضافه کردن مقاله</h4>
                    </header>
                    <div class="card-body">
                        <form action="{{asset('/admin/add-article/store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="form-group{{ $errors->has('fa_name') ? 'has-error' : '' }}">

                                <label for="fa_name" class="control-label">نام فارسی*</label>
                                <input type="text" name="fa_name" class="form-control" value="{{old('fa_name')}}">
                                @if($errors->has('fa_name'))
                                    <span class="danger">
                                                    <small>{{$errors->first('fa_name')}}</small></span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="author" class="control-label">نویسنده*</label>
                                <input type="text" name="author" class="form-control" value="{{old('author')}}">
                                @if($errors->has('author'))
                                    <span class="danger">
                                            <small>{{$errors->first('author')}}</small></span>
                                @endif
                            </div>

                            {{--<div class="form-row">--}}
                            <div class="form-group">
                                <label for="price" class="control-label">قیمت*</label>
                                <input type="text" name="price" class="form-control" value="{{old('price')}}">
                                @if($errors->has('price'))
                                    <span class="danger">
                                                    <small>{{$errors->first('price')}}</small>
                                                </span>
                                @endif


                            </div> <!-- form-group end.// -->

                            <div class="form-group">
                                <label for="cat_id">دسته</label>
                                <select name="cat_id"  class=" form-control">
                                    <option value="0"> انتخاب</option>
{{--                                    <optgroup label="{{$category->type}}"></optgroup>--}}
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}">{{$category->fa_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('cat_id'))
                                    <span class="danger">
                                                    <small>{{$errors->first('cat_id')}}</small>
                                                </span>
                                @endif
                            </div> <!-- form-group end.// -->

                           <hr>

                            <div class="form-group">
                                {{--<label for="file" class="btn btn-file ">آپلود مقاله&nbsp;--}}
                                {{--<input type="file" class="filepond">--}}
                                <label for="file" class="btn btn-file">آپلود فایل مقاله
                                <input type="file" class="article-file" name="article-file" id="article-file">
                                @if($errors->has('article-file'))
                                    <span class="danger">
                                                    <small>{{$errors->first('article-file')}}</small>
                                                </span>
                                @endif
                                {{--</label>--}}
                            </div>
                            <div class="form-group">
                                <label for="file" class="btn btn-file">آپلود تصویر مقاله
                                    <input type="file" class="" name="article-pix" id="article-pix">
                                    @if($errors->has('article-pix'))
                                        <span class="danger">
                                                    <small>{{$errors->first('article-pix')}}</small>
                                                </span>
                                    @endif
                                </label>
                            </div>

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


<!-- ////////////////////////////////////////////////////////////////////////////-->




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
