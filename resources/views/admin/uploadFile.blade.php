<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('https://unpkg.com/filepond/dist/filepond.css')}}" rel="stylesheet">
{{--<link rel="stylesheet" type="text/css" href="/css/fileponder.css">--}}
<!-- Styles -->

    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('admin-design/images/ico/apple-icon-60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin-design/images/ico/apple-icon-76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin-design/images/ico/apple-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('admin-design/images/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('https://pixinvent.com/free-bootstrap-template/robust-lite/app-assets/images/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('admin-design/images/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
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



                            <div class="form-group">
                                {{--<label for="file" class="btn btn-file ">آپلود مقاله&nbsp;--}}
                                {{--<input type="file" class="filepond">--}}
                                <input type="file" class="filepond" name="article-file" id="filepond">
                                {{--@if($errors->has('article-file'))--}}
                                    {{--<span class="danger">--}}
                                                    {{--<small>{{$errors->first('article-file')}}</small>--}}
                                                {{--</span>--}}
                                {{--@endif--}}
                                {{--</label>--}}
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

<script src="/js/fileponder.js"></script>
<script>
    FilePond.registerPlugin(
         FilePondPluginImagePreview,
    );

    FilePond.setOptions({
        server: {
            url: '/upload',
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
</body>
</html>
