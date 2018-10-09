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

    @php($art_nums=0)
    @foreach($sells as $sell)
        @php($totalPrice+=$sell->article_price)
        @php($art_nums++)
    @endforeach
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="pink">{{$totalArticles}}</h3>
                                        <span>کل مقالات</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-document-text pink font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="teal">{{$totalUsers}}</h3>
                                        <span>کل کاربران</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="deep-orange">{{$art_nums}}</h3>
                                        <span>کل مقالات فروخته شده</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-document deep-orange font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">

                                        <h5 class="cyan">{{$totalPrice}} هزار </h5>
                                        <span>کل درآمد</span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-moneybag cyan font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-deep-orange media-left media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                    </div>
                    <div class="p-2 media-body">
                        <h5 class="deep-orange">کاربرهای جدید</h5>
                        <h5 class="text-bold-400">1,22,356</h5>
                        {{--<progress class="progress progress-sm progress-deep-orange mt-1 mb-0" value="45" max="100"></progress>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="p-2 text-xs-center bg-cyan media-left media-middle">
                        <i class="icon-camera7 font-large-2 white"></i>
                    </div>
                    <div class="p-2 media-body">
                        <h5>محصولات جدید</h5>
                        <h5 class="text-bold-400">28</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">فاکتوهای اخیر</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>نام مشتری</th>
                                <th>نام مقاله</th>
                                <th>قیمت مقاله</th>
                                <th>زمان</th>

                            </tr>
                        </thead>
                        <tbody>
                        {{--@php(dd($sells[1]))--}}
                        @for($count=1;$count<=5;$count++)
                            <tr>
                                <td class="text-truncate">{{$sells[$count]->user_name}}</td>
                                <td class="text-truncate">{{$sells[$count]->article_name}}</td>
                                <td class="text-truncate"><span class="tag tag-default tag-success">{{$sells[$count]->article_price}} هزار تومان </span></td>
                                <td class="text-truncate">{{$sells[$count]->created_at}}</td>
                            </tr>
                        @endfor



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
