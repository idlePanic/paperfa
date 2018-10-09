<!DOCTYPE html>
<html lang="en" data-textdirection="rtl" class="loading">

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:27 GMT -->
<head>
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>paperفا</title>


    {{--<link rel="stylesheet" type="text/css" href="/css/fileponder.css">--}}

    <link href="{{asset('https://unpkg.com/filepond/dist/filepond.css')}}" rel="stylesheet">
    <script src="{{asset('https://unpkg.com/filepond/dist/filepond.js')}}"></script>

    {{--<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js')}}"></script>--}}
    {{--<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css')}}" rel="stylesheet" type="text/css">--}}

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
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
                <li class="nav-item"><a href="{{asset('/admin.index')}}" class="navbar-brand nav-link"><img alt="branding logo" src="{{asset('/images/logo/robust-logo-light.png')}}" data-expand="{{asset('/images/logo/paper-logo.png')}}" data-collapse="{{asset('/images/logo/robust-logo-small.png')}}" class="brand-logo"></a></li>
                <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active"><i class="icon-menu5">         </i></a></li>
                    <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-xs-right">

                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">اعلان ها</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 جدید</span></h6>
                            </li>
                            <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="0985c8c7-5a9e-3232-755b-df64ee42c274"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">شما سفارش جدیدی دارید</h6>
                                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading red darken-1">99% لود سرور</h6>
                                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading yellow darken-3">اعلان های خطر</h6>
                                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">تکمیل کار</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">آخر هفته</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">گزارش ماهانه را تولید کنید</h6><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">ماه گذشته</time></small>
                                        </div>
                                    </div></a><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; right: 373px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 236px;"></div></div></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">خواندن همه اعلان ها</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">پیام ها</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                            </li>
                            <li class="list-group scrollable-container ps-container ps-theme-dark ps-active-y" data-ps-id="f8126846-773c-12a0-f9f9-d0207f7ecec5"><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">علی عابدی</h6>
                                            <p class="notification-text font-small-3 text-muted">من نمونه کارهای شما را دوست دارم، بگذارید پروژه را شروع کنیم.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">امروز</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">حسین توکلی</h6>
                                            <p class="notification-text font-small-3 text-muted">من کار شما را دیده ام، وجود دارد</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">سشنبه</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">عارف محمدزاده</h6>
                                            <p class="notification-text font-small-3 text-muted">آیا می توانیم در این هفته تماس بگیریم؟ ?</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">جمعه</time></small>
                                        </div>
                                    </div></a><a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                        <div class="media-body">
                                            <h6 class="media-heading">اکبر جوی</h6>
                                            <p class="notification-text font-small-3 text-muted">ما این شب شنبه شب جشن پروژه داریم.</p><small>
                                                <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">ماه گذشته</time></small>
                                        </div>
                                    </div></a><div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 320px; right: 373px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 258px;"></div></div></li>
                            <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">تمام پیام ها را بخوانید</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                            <span class="avatar avatar-online">
                                <img src="../assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i>
                            </span>
                            <span class="user-name">جان دویی</span></a>
                        <div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item"><i class="icon-head"></i> ویرایش پروفایل</a><a href="#" class="dropdown-item"><i class="icon-mail6"></i> صندوق ورودی من</a><a href="#" class="dropdown-item"><i class="icon-clipboard2"></i> کار</a><a href="#" class="dropdown-item"><i class="icon-calendar5"></i> تقویم</a>
                            <div class="dropdown-divider"></div><a href="#" class="dropdown-item"><i class="icon-power3"></i> خروج</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round"/>
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class="active"><a href="{{asset('admin')}}" data-i18n="nav.dash.main" class="menu-item">خانه</a>


            <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">محتوای سایت</span></a>
                <ul class="menu-content">
                    <li><a href="{{asset('admin/show-users')}}" data-i18n="nav.content.content_grid" class="menu-item">کاربران</a>
                    </li>
                    <li><a href="{{asset('admin/show-article')}}" data-i18n="nav.content.content_typography" class="menu-item">مقاله ها</a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">ویرایش محتوا</span></a>
                <ul class="menu-content">
                    <li><a href="content-grid.html" data-i18n="nav.content.content_grid" class="menu-item">ویرایش کاربران</a></li>
                    <li><a href="{{asset('admin/edit-article')}}" data-i18n="nav.content.content_typography" class="menu-item">ویرایش مقاله ها</a></li>
                    <li><a href="{{asset('admin/add-article')}}" data-i18n="nav.content.content_typography" class="menu-item">افزودن مقاله</a></li>
                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="icon-compass3"></i><span data-i18n="nav.content.main" class="menu-title">محتوا</span></a>
                <ul class="menu-content">
                    <li><a href="content-grid.html" data-i18n="nav.content.content_grid" class="menu-item">گرید</a>
                    </li>
                    <li><a href="content-typography.html" data-i18n="nav.content.content_typography" class="menu-item">تایپوگرافی</a>
                    </li>
                    <li><a href="content-text-utilities.html" data-i18n="nav.content.content_text_utilities" class="menu-item">ابزارهای متن</a>
                    </li>
                    <li><a href="content-helper-classes.html" data-i18n="nav.content.content_helper_classes" class="menu-item">کلاس امدادگر</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-grid2"></i><span data-i18n="nav.components.main" class="menu-title">تکه کدها</span></a>
                <ul class="menu-content">
                    <li><a href="component-alerts.html" data-i18n="nav.components.component_alerts" class="menu-item">پیام ها</a>
                    </li>
                    <li><a href="component-buttons-basic.html" data-i18n="nav.components.components_buttons.component_buttons_basic" class="menu-item">دکمه های اصلی</a>
                    </li>
                    <li><a href="component-carousel.html" data-i18n="nav.components.component_carousel" class="menu-item">چرخ فلک</a>
                    </li>
                    <li><a href="component-collapse.html" data-i18n="nav.components.component_collapse" class="menu-item">فروپاشی</a>
                    </li>
                    <li><a href="component-dropdowns.html" data-i18n="nav.components.component_dropdowns" class="menu-item">رها کننده</a>
                    </li>
                    <li><a href="component-list-group.html" data-i18n="nav.components.component_list_group" class="menu-item">لیست گروه ها</a>
                    </li>
                    <li><a href="component-modals.html" data-i18n="nav.components.component_modals" class="menu-item">مدال ها</a>
                    </li>
                    <li><a href="component-pagination.html" data-i18n="nav.components.component_pagination" class="menu-item">صفحه بندی</a>
                    </li>
                    <li><a href="component-navs-component.html" data-i18n="nav.components.component_navs_component" class="menu-item">اجزا نویگیشن</a>
                    </li>
                    <li><a href="component-tabs-component.html" data-i18n="nav.components.component_tabs_component" class="menu-item">اجرای تب</a>
                    </li>
                    <li><a href="component-pills-component.html" data-i18n="nav.components.component_pills_component" class="menu-item">قرص کامپوننت</a>
                    </li>
                    <li><a href="component-tooltips.html" data-i18n="nav.components.component_tooltips" class="menu-item">راهنمای ابزار</a>
                    </li>
                    <li><a href="component-popovers.html" data-i18n="nav.components.component_popovers" class="menu-item">پاپ اور</a>
                    </li>
                    <li><a href="component-tags.html" data-i18n="nav.components.component_tags" class="menu-item">تگ ها</a>
                    </li>
                    <li><a href="component-pill-tags.html" class="menu-item">برچسب قرص</a>
                    </li>
                    <li><a href="component-progress.html" data-i18n="nav.components.component_progress" class="menu-item">پیش رفتن</a>
                    </li>
                    <li><a href="component-media-objects.html" data-i18n="nav.components.component_media_objects" class="menu-item">اشیاء رسانه ای</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="icon-eye6"></i><span data-i18n="nav.icons.main" class="menu-title">ایکن ها</span></a>
                <ul class="menu-content">
                    <li><a href="icons-feather.html" data-i18n="nav.icons.icons_feather" class="menu-item">پر</a>
                    </li>
                    <li><a href="icons-ionicons.html" data-i18n="nav.icons.icons_ionicons" class="menu-item">ایکن ها</a>
                    </li>
                    <li><a href="icons-fps-line.html" data-i18n="nav.icons.icons_fps_line" class="menu-item">FPS Line Icons</a>
                    </li>
                    <li><a href="icons-ico-moon.html" data-i18n="nav.icons.icons_ico_moon" class="menu-item">Ico Moon</a>
                    </li>
                    <li><a href="icons-font-awesome.html" data-i18n="nav.icons.icons_font_awesome" class="menu-item">Font Awesome</a>
                    </li>
                    <li><a href="icons-meteocons.html" data-i18n="nav.icons.icons_meteocons" class="menu-item">Meteocons</a>
                    </li>
                    <li><a href="icons-evil.html" data-i18n="nav.icons.icons_evil" class="menu-item">Evil Icons</a>
                    </li>
                    <li><a href="icons-linecons.html" data-i18n="nav.icons.icons_linecons" class="menu-item">Linecons</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="form-layout-basic.html"><i class="icon-paper"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">فرم های پایه</span></a>
            </li>
            <li class=" nav-item"><a href="table-basic.html"><i class="icon-table2"></i><span data-i18n="nav.bootstrap_tables.table_basic" class="menu-title">جدول های پایه</span></a>
            </li>





        </ul>
    </div>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->



<!--form---------------------------------------------------------------->
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


        <input type="file" class="filepond">

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
                                <select name="cat_id"  class="form-control">
                                    <option value="0"> انتخاب</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->fa_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('cat_id'))
                                    <span class="danger">
                                                    <small>{{$errors->first('cat_id')}}</small>
                                                </span>
                                @endif
                            </div> <!-- form-group end.// --><hr>
                            <div class="form-group">
                                {{--<label for="file" class="btn btn-file ">آپلود مقاله&nbsp;--}}
                                {{--<input type="file" class="filepond">--}}
                                {{--<input type="file" class="filepond" name="filepond" id="filepond">--}}
                                @if($errors->has('article-file'))
                                    <span class="danger">
                                                    <small>{{$errors->first('article-file')}}</small>
                                                </span>
                                @endif
                                {{--</label>--}}
                            </div>
                            <div class="form-group">
                                <label for="file" class="btn btn-file btn-primary">آپلود تصویر مقاله
                                    {{--<input type="file" name="article-pix" id="article-pix">--}}
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


{{--<form action="{{asset('/admin/add-article/store')}}" method="post" class="form-horizontal">--}}

{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

{{--<div class="form-group">--}}
{{--<label for="fa_name" class="control-label col-md-2">نام فارسی</label>--}}
{{--<div class="col-md-9">--}}
{{--<input type="text" name="fa_name" class="form-control">--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="eng_name" class="control-label col-md-2">نام انگلیسی</label>--}}
{{--<div class="col-md-9">--}}
{{--<input type="text" name="eng_name" class="form-control">--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<label for="author" class="control-label col-md-2">نویسنده</label>--}}
{{--<div class="col-md-9">--}}
{{--<input type="text" name="author" class="form-control">--}}

{{--</div>--}}
{{--</div>--}}
{{--<div class="form-group">--}}
{{--<input type="submit" value="save" class="btn btn-primary">--}}
{{--</div>--}}
{{--</form>--}}


<!--form---------------------------------------------------------------->



<!-- ////////////////////////////////////////////////////////////////////////////-->
{{--upload filepond-------------------------------------------------------}}

<script src="/js/fileponder.js"></script>
<script>
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
    );

    FilePond.setOptions({
        server: {
            url: 'upload',
            process: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }
        }
    });
    const inputElement = document.querySelector('input[type="file"]');
    const pond = FilePond.create( inputElement );
</script>
{{--upload filepond-------------------------------------------------------}}



<!--table------------------------->
<script>



    // var $ = jQuery;
    // $.getScript("https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js", function(){
    //
    //     $('#example').DataTable( {
    //         "paging":   true,
    //         "ordering": true,
    //         "info":     false
    //     } );
    // });
</script>
<!--end table------------------------->
{{--session ------------------------------------------------------------}}
<script>
    $('div.alert').delay(3000).slideUp(300);
</script>
{{--endsession ------------------------------------------------------------}}


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
